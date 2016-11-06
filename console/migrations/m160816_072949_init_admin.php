<?php

use yii\db\Migration;
use common\models\Users;

class m160816_072949_init_admin extends Migration
{
    public function up()
    {
        $model = new Users();
        $model->setAttributes(array(
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'role' => Users::ROLE_ADMIN,
            'avatar' => 'no-image.jpg'
        ));
        $model->setPassword("abc123");
        $model->generateAuthKey();
        $model->save(false);

    }

    public function down()
    {
        Users::deleteAll(array('email' => 'admin@gmail.com'));
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
