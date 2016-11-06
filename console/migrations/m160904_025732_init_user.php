<?php

use yii\db\Migration;
use common\models\Users;

class m160904_025732_init_user extends Migration
{
    public function up()
    {
        $model = new Users();
        $model->setAttributes(array(
            'username' => 'user',
            'email' =>'user@gmail.com',
            'role' => Users::ROLE_USER,
            'avatar' => 'no-image.jpg'
        ));
        $model->setPassword("abc123");
        $model->generateAuthKey();
        $model->save(false);

    }

    public function down()
    {
        Users::deleteAll(array('email' => 'user@gmail.com'));
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
