<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Categories extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
       
    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    public static function tableName() {
        return 'categories';
    }

    public function beforeSoftDelete() {
        $this->deleted_at = time(); // log the deletion date
        return true;
    }

    public function beforeRestore() {
        return $this->deleted_at > (time() - 3600); // allow restoration only for the records, being deleted during last hour
    }
     public static function listCategory(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

}
