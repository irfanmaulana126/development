<?php

namespace backend\admin\models;

use Yii;

/**
 * This is the model class for table "app_ktg".
 *
 * @property string $ID
 * @property string $KODE_KTG
 * @property string $KTG_NM
 * @property string $DESKRIPSI
 */
class AppKtg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'app_ktg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KODE_KTG', 'KTG_NM', 'DESKRIPSI'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'KODE_KTG' => 'Kode  Ktg',
            'KTG_NM' => 'Ktg  Nm',
            'DESKRIPSI' => 'Deskripsi',
        ];
    }
}
