<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset".
 *
 * @property int $id_asset
 * @property string $purchase_date
 * @property string $description
 * @property string $sales_check
 * @property string $create_at
 * @property string $price
 * @property string $currency
 * @property int $status
 * @property string $serial_number
 * @property string $ubication
 * @property int $id_asset_type
 * @property int $id_model
 * @property string $id_leasing
 *
 * @property Models $model
 * @property TypeAsset $assetType
 * @property HistoryAssign[] $historyAssigns
 */
class Asset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['purchase_date', 'create_at'], 'safe'],
            [['description'], 'string'],
            [['price', 'id_asset_type', 'id_model' ,'currency'], 'required'],
            [['price', 'id_leasing'], 'number'],
            [['status', 'id_asset_type', 'id_model'], 'integer'],
            [['sales_check', 'ubication' ,'currency'], 'string', 'max' => 45],
            [['serial_number'], 'string', 'max' => 100],
            [['id_model'], 'exist', 'skipOnError' => true, 'targetClass' => Models::className(), 'targetAttribute' => ['id_model' => 'id_model']],
            [['id_asset_type'], 'exist', 'skipOnError' => true, 'targetClass' => TypeAsset::className(), 'targetAttribute' => ['id_asset_type' => 'id_type_asset']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_asset' => Yii::t('app', 'Id Asset'),
            'purchase_date' => Yii::t('app', 'Purchase Date'),
            'description' => Yii::t('app', 'Description'),
            'sales_check' => Yii::t('app', 'Sales Check'),
            'create_at' => Yii::t('app', 'Create At'),
            'price' => Yii::t('app', 'Price'),
            'currency' => Yii::t('app', 'Currency'),
            'status' => Yii::t('app', 'Status'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'ubication' => Yii::t('app', 'Ubication'),
            'id_asset_type' => Yii::t('app', 'Id Asset Type'),
            'id_model' => Yii::t('app', 'Id Model'),
            'id_leasing' => Yii::t('app', 'Id Leasing'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(Models::className(), ['id_model' => 'id_model']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssetType()
    {
        return $this->hasOne(TypeAsset::className(), ['id_type_asset' => 'id_asset_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryAssigns()
    {
        return $this->hasMany(HistoryAssign::className(), ['id_asset' => 'id_asset']);
    }
}
