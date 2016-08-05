<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 8/5/16
 * Time: 1:49 PM
 */

namespace backend\models;

use Yii;
use yii\base\Exception as BaseException;
use yii\base\Exception;
use backend\models\CodeBlockItem;
/**
 * Class GoogleAnalytics
 * @package backend\models
 * @property \Google_Service_Analytics $connection
 */
class GoogleAnalytics extends \yii\base\Action
{
    public $startDate;
    public $endDate;
    public $connection = null;
    public $clientID;
    public $serviceAccountName;
    public $keyFileLocation;
    public $analyticsID;
    public $keyFile;

    public function __construct()
    {

        parent::init();

        $clientID = CodeBlockItem::getCode('client-id')->content;
        $serviceAccountName = CodeBlockItem::getCode('service-account-name');
        $analyticsID = CodeBlockItem::getCode('analytics-id');

        $this->clientID = $clientID ? $clientID->content : '64247209.apps.googleusercontent.com';
        $this->serviceAccountName = $serviceAccountName->content ? $serviceAccountName : '35226049920-dhfa4qa40noimn0klufkqrddjsk1s6rc@developer.gserviceaccount.com';
        $this->analyticsID = $analyticsID ? $analyticsID->content : 'ga:104012318';

        $this->connectToAnalytics();
    }

    /**
     * @return \Google_Service_Analytics|null
     */
    public function connectToAnalytics()
    {

        if ($this->connection == null) {
            require_once Yii::getAlias('@google/api') . '/Google/Client.php';
            require_once Yii::getAlias('@google/api') . '/Google/Service/Analytics.php';

            $client = new \Google_Client();
            $client->setApplicationName("Client_Library_Examples");

            if (isset($_SESSION['service_token'])) {
                $client->setAccessToken($_SESSION['service_token']);
            }

            $key = file_get_contents(Yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'google_auth_key' . DIRECTORY_SEPARATOR . 'oauthkeyfile.p12');
            $cred = new \Google_Auth_AssertionCredentials(
                $this->serviceAccountName,
                array('https://www.googleapis.com/auth/analytics'),
                $key
            );

            $client->setAccessType('offline_access');
            $client->setAssertionCredentials($cred);

            if ($client->getAuth()->isAccessTokenExpired()) {
                $client->getAuth()->refreshTokenWithAssertion($cred);
            }

            $_SESSION['service_token'] = $client->getAccessToken();

            // Connect to the analytics api
            $analytics = new \Google_Service_Analytics($client);

            $this->connection = $analytics;

        }

        return $this->connection;
    }

    /**
     * Get the sessions data
     *
     * @return string
     */
    public function getSessions()
    {
        // Read the data from cache
        $data = $this->readFromCache('infoweb/analytics/data/sessions');

        if (!$data) {
            try {
                // You can find your analytics profile id here: Admin -> Profile Settings -> Profile ID
                $results = $this->connection->data_ga->get(Yii::$app->params['analytics']['analyticsId'], $this->startDate, $this->endDate, 'ga:sessions', ['dimensions' => 'ga:date']);

                $data[] = [Yii::t('infoweb/analytics', 'Day'), Yii::t('infoweb/analytics', 'Sessions')];

                foreach ($results['rows'] as $result) {
                    $data[] = [date('d-m-Y', strtotime($result[0])), (int)$result[1]];
                }

                $this->cacheData('infoweb/analytics/data/sessions', $data);

            } catch (Exception $e) {
                throw new BaseException(Yii::t('infoweb/analytics', 'Error while fetching data from Google Analytics'));
            }
        }

        return json_encode($data);
    }

    /**
     * Get the visitors data
     *
     * @return string
     */
    public function getVisitors()
    {
        try {

            $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:visits')->getTotalsForAllResults();
            $data = $results['ga:visits'];
            return $data;

        } catch (Exception $e) {
            throw new BaseException(Yii::t('app', 'Error while fetching data from Google Analytics'));
        }

    }

    /**
     * @return string
     */
    public function getUniquePageView()
    {
        try {
            $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:uniquePageviews')->getTotalsForAllResults();
            $data = $results['ga:uniquePageviews'];
            return $data;

        } catch (Exception $e) {
            throw new BaseException(Yii::t('app', 'Error while fetching data from Google Analytics'));
        }

    }

    public function getBounces()
    {
        try {
            $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:bounces')->getTotalsForAllResults();
            $data = $results['ga:bounces'];
            return $data;

        } catch (Exception $e) {
            throw new BaseException(Yii::t('app', 'Error while fetching data from Google Analytics'));
        }

    }

    public function getBounceRate()
    {

        try {
            $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:bounceRate')->getTotalsForAllResults();
            $data = $results['ga:bounceRate'];
            return $data;

        } catch (Exception $e) {
            throw new BaseException(Yii::t('app', 'Error while fetching data from Google Analytics'));
        }


    }

    public function getNewVisits()
    {
        try {
            $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:newUsers')->getTotalsForAllResults();
            $data = $results['ga:newUsers'];
            return $data;

        } catch (Exception $e) {
            throw new BaseException(Yii::t('app', 'Error while fetching data from Google Analytics'));
        }
    }

    /**
     * Get the visitors data
     *
     * @return string
     */
    public function getPageView()
    {
        // Read the data from cache
        $results = $this->connection->data_ga->get(
            $this->analyticsID,
            $this->startDate,
            $this->endDate,
            'ga:visits',
            [
                'dimensions' => 'ga:pagePath',
                'start-index' => 1,
                'max-results' => 10000,
                'metrics' => 'ga:pageviews',
                'sort' => '-ga:pageviews'
            ]
        )->getTotalsForAllResults();
        return $results["ga:pageviews"];
    }

    /**
     * Get the countries data
     *
     * @return string
     */
    public function getCountries()
    {
        // Read the data from cache
        $data = $this->readFromCache('infoweb/analytics/data/countries');

        if (!$data) {
            try {

                //$results = $this->connection->data_ga->get(Yii::$app->params['analytics']['analyticsId'], $this->startDate, $this->endDate, 'ga:sessions', ['sort' => '-ga:sessions', 'max-results' => 10]);
                $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:sessions', ['dimensions' => 'ga:country', 'sort' => '-ga:sessions', 'max-results' => 10]);

                $data['cols'] = [
                    ['id' => 'countries', 'label' => Yii::t('infoweb/analytics', 'Countries'), 'type' => 'string'],
                    ['id' => 'sessions', 'label' => Yii::t('infoweb/analytics', 'Sessions'), 'type' => 'number'],
                ];

                if ($results['rows']) {
                    foreach ($results['rows'] as $result) {
                        $data['rows'][] = ['c' => [
                            ['v' => $result[0]],
                            ['v' => (int)$result[1]]],
                        ];
                    }
                }

                $this->cacheData('infoweb/analytics/data/countries', $data);

            } catch (Exception $e) {
                throw new BaseException(Yii::t('infoweb/analytics', 'Error while fetching data from Google Analytics'));
            }
        }

        return json_encode($data);
    }

    /**
     * Get total sessions data
     *
     * @return string
     */
    public function getTotalSessions()
    {
        // Read the data from cache
        $data = $this->readFromCache('infoweb/analytics/data/totalSessions');

        if (!$data) {
            try {
                $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:sessions')->getTotalsForAllResults();

                $data = number_format($results['ga:sessions'], 0, ',', '.');

                $this->cacheData('infoweb/analytics/data/totalSessions', $data);
            } catch (Exception $e) {
                throw new BaseException(Yii::t('infoweb/analytics', 'Error while fetching data from Google Analytics'));
            }
        }
        return json_encode($data);
    }

    /**
     * Get total users data
     *
     * @return string
     */
    public function getTotalUsers()
    {
        // Read the data from cache
        $data = $this->readFromCache('infoweb/analytics/data/totalUsers');

        if (!$data) {
            try {
                $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:users')->getTotalsForAllResults();

                $data = number_format($results['ga:users'], 0, ',', '.');

                $this->cacheData('infoweb/analytics/data/totalUsers', $data);
            } catch (Exception $e) {
                throw new BaseException(Yii::t('infoweb/analytics', 'Error while fetching data from Google Analytics'));
            }
        }

        return json_encode($data);
    }

    /**
     * Get total page views data
     *
     * @return string
     */
    public function getTotalPageViews()
    {

        $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:pageviews')->getTotalsForAllResults();
        $data = $results['ga:pageviews'];

        return $data;
    }

    /**
     * Get average session length data
     *
     * @return string
     */
    public function getAverageSessionLength()
    {
        // Read the data from cache
        $data = $this->readFromCache('infoweb/analytics/data/averageSessionLength');

        if (!$data) {
            try {
                $results = $this->connection->data_ga->get($this->analyticsID, $this->startDate, $this->endDate, 'ga:avgSessionDuration')->getTotalsForAllResults();

                $data = gmdate('H:i:m', $results['ga:avgSessionDuration']);

                $this->cacheData('infoweb/analytics/data/averageSessionLength', $data);
            } catch (Exception $e) {
                throw new BaseException(Yii::t('infoweb/analytics', 'Error while fetching data from Google Analytics'));
            }
        }

        return json_encode($data);
    }

    /**
     * Caches data in a session variable
     *
     * @param   string $key The key that has to be used in the session var
     * @param   mixed $data
     * @return  boolean
     */
    public function cacheData($key = '', $data = [])
    {
        $session = Yii::$app->session;

        $session[$key] = serialize($data);

        return true;
    }

    /**
     * Reads the data from cache
     *
     * @param   string $key
     * @return  mixed
     */
    public function readFromCache($key)
    {
        $session = Yii::$app->session;

        return ($session->has($key)) ? unserialize($session[$key]) : [];
    }
}