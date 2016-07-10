<?php

use yii\db\Migration;
use common\enpii\components\NpAuthorRule;

class m160709_105722_insert_rbac extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        // add "create" permission
        $permission = $auth->createPermission('backend-login');
        $permission->description = 'Login to backend';
        $auth->add($permission);


        // add "author" role and give this role the  permission
        $standard = $auth->createRole('standard-member');
        $auth->add($standard);

        $admin = $auth->createRole('administrator');
        $auth->add($admin);


        $auth->addChild($admin, $permission);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role

        $auth->addChild($admin, $standard);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($admin, 2);
        $auth->assign($admin, 1);

        //Create Rule
        $rule = new NpAuthorRule();
        $auth->add($rule);
    }

    public function down()
    {
        $this->delete('{{%auth_item}}');
        $this->delete('{{%auth_item_child}}');
        $this->delete('{{%auth_assignment}}');
        $this->delete('{{%auth_rule}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
