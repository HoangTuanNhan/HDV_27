<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "addresses".
 *
 * @property integer $id
 * @property integer $name
 * @property integer $number
 * @property integer $street
 * @property integer $district_id
 * @property integer $link_map
 *
 * @property Districts $district
 * @property Restaurants[] $restaurants
 */
class Addresses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'number', 'street', 'district_id', 'link_map'], 'required'],
            [['name', 'number', 'street', 'district_id', 'link_map'], 'integer'],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'number' => 'Number',
            'street' => 'Street',
            'district_id' => 'District ID',
            'link_map' => 'Link Map',
        ];
    }
     public static function listAddress() {
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(Districts::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurants()
    {
        return $this->hasMany(Restaurants::className(), ['address_id' => 'id']);
    }
    
}
