<?php

namespace backend\openticket\models;

use Yii;

/**
 * This is the model class for table "app_detail_ktg".
 *
 * @property string $ID
 * @property string $KODE_KTG
 * @property string $KTG_NM
 * @property string $MODUL_NM
 * @property string $KODE_USER
 * @property string $USERNAME
 * @property string $TGL1
 * @property string $TGL2
 * @property string $DESKRIPSI
 * @property int $STATUS 0=pending;1=success;2=finish;
 */
class AppDetailKtg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_detail_ktg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TGL1', 'TGL2'], 'safe'],
            [['DESKRIPSI'], 'string'],
            [['STATUS'], 'integer'],
            [['KODE_KTG', 'KTG_NM', 'MODUL_NM', 'KODE_USER', 'USERNAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'KODE_KTG' => 'Kode  Ktg',
            'KTG_NM' => 'Ktg  Nm',
            'MODUL_NM' => 'Modul  Nm',
            'KODE_USER' => 'Kode  User',
            'USERNAME' => 'Username',
            'TGL1' => 'Tgl1',
            'TGL2' => 'Tgl2',
            'DESKRIPSI' => 'Deskripsi',
            'STATUS' => 'Status',
        ];
    }
}
