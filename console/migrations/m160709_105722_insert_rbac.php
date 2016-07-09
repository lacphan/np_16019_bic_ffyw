<?php

use yii\db\Migration;
use common\enpii\components\NpAuthorRule;

class m160709_105722_insert_rbac extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        // add "create" permission
        $index = $auth->createPermission('user/index');
        $index->description = 'Create a User';
        $auth->add($index);

        $view = $auth->createPermission('user/view');
        $view->description = 'View a User';
        $auth->add($view);

        // add "create" permission
        $create = $auth->createPermission('user/create');
        $create->description = 'Create a User';
        $auth->add($create);

        // add "update" permission
        $update = $auth->createPermission('user/update');
        $update->description = 'Update User';
        $auth->add($update);

        // add "delete" permission
        $delete = $auth->createPermission('user/delete');
        $delete->description = 'delete user';
        $auth->add($delete);

        // add "author" role and give this role the  permission
        $standard = $auth->createRole('standard-member');
        $auth->add($standard);

        $admin = $auth->createRole('administrator');
        $auth->add($admin);

        $auth->addChild($admin, $view);
        $auth->addChild($admin, $index);
        $auth->addChild($admin, $create);
        $auth->addChild($admin, $update);
        $auth->addChild($admin, $delete);

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
        $updateOwnPost = $auth->createPermission('updateOwnPost');
        $updateOwnPost->description = 'Update own post';
        $updateOwnPost->ruleName = $rule->name;
        $auth->add($updateOwnPost);

        // "updateOwnPost" will be used from "updatePost"
        $auth->addChild($updateOwnPost, $update);

        // allow "author" to update their own posts
        $auth->addChild($standard, $updateOwnPost);
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
