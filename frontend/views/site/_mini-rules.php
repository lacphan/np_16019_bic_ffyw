<?php
use frontend\models\PageItem;
?>
<div class="home-text-block">
    <div class="show-on-desktop">
        <p>
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <strong>AUCUN ACHAT REQUIS POUR PARTICIPER OU GAGNER.</strong> Le concours s'adresse uniquement aux résidents légaux canadiens qui dépassent l'âge de la majorité dans leur province ou territoire de résidence et qui sont parents ou tuteurs légaux d'un enfant âgé entre 6 et 18 ans au moment de l'inscription (« Enfant admissible »). Le concours débute le 9 août 2016 à 0:00:01 heure normale de l'EST (HNE) et se termine le 19 septembre 2016 à 23:59:59 HNE (« Période de participation au concours »). Les gagnants du concours seront choisis uniquement par tirage au sort. Les chances de gagner au tirage au sort dépendent du nombre d'inscriptions admissibles reçues.. Une (1) Participation au concours par personne par semaine pour chaque Enfant admissible (jusqu'à un maximum de quatre (4) Enfants admissibles par personne). Vous devez utiliser seulement une (1) adresse courriel pour participer à ce Concours. Les gagnants hebdomadaires sont sélectionnés au hasard à la fin de la période hebdomadaire respective. Le gagnant du grand prix sera sélectionné lorsque le Concours sera terminé. Les gagnants doivent répondre correctement à une question d'habileté mathématique pour gagner un prix. Consultez les <a target="_blank" href="<?= PageItem::getPermalink(['official-rules']) ?>"><?= Yii::t(_NP_TEXT_DOMAIN, 'Official Rules') ?></a> pour obtenir plus de détails. Commanditaire : BIC Inc.
            <?php
            else:
            ?>
                <strong>NO PURCHASE NECESSARY TO ENTER OR WIN.</strong> The Contest is strictly open to individuals who are legal residents of Canada, who are over the age of majority in their province or territory of residence and a parent and/or legal guardian of a child between the age of 6 and 18 at the time of entry (“Eligible Child”). The Contest will begin August 9, 2016 at 12:00:01 PM Eastern Time (“ET”) and ends September 19, 2016 at 11:59:59 PM ET ("Contest Submission Period").  Contest Winners will be determined solely by random draw. Odds of winning in the random drawings depend upon the number of eligible entries received. One (1) Contest Submission per person, per week for each Eligible Child (up to a maximum of four (4) Eligible Children per person).  You may only use one (1) email address to participate in this Contest. Weekly winners are selected randomly at end of respective weekly period. Grand prize winner to be selected upon full completion of the Contest. Winners must correctly answer a mathematical skill testing question to win a prize. See <a target="_blank" href="<?= PageItem::getPermalink(['official-rules']) ?>"><?= Yii::t(_NP_TEXT_DOMAIN, 'Official Rules') ?></a> for details.  Sponsor: BIC Inc.
            <?php
            endif;
            ?>
        </p>

    </div>
    <div class="show-on-mobile">
         No Purch Nec., CAD only, Age of Majority in Prov./Territ. of Res. Ends 09/19/2016. <a target="_blank"
                                                                                               href="<?= PageItem::getPermalink(['official-rules']) ?>">Click
            Here for Official Rules.</a>
    </div>

</div>