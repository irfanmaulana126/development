<?php

namespace backend\admin\models;

use Yii;
use backend\admin\models\OpenTicket;
/**
 * This is the model class for table "open_ticket".
 *
 * @property string $ID
 * @property string $KODE_MODUL
 * @property string $MODUL_NM
 * @property string $KODE_USER
 * @property string $USERNAME
 * @property string $TGL1
 * @property string $TGL2
 * @property int $STATUS 0=pending;1=success;2=finish;
 * @property string $DESKRIPSI
 * @property string $API_KEY
 * @property string $KODE_KTG
 * @property string $KTG_NM
 * @property string $TITLE
 * @property int $STATUS_QA 0=create;1=send to qa ;2=read from qa
 */
class OpenTicket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'open_ticket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TGL1', 'TGL2'], 'safe'],
            [['STATUS', 'STATUS_QA'], 'integer'],
            [['DESKRIPSI'], 'string'],
            [['KODE_MODUL', 'MODUL_NM', 'KODE_USER', 'USERNAME', 'KODE_KTG', 'KTG_NM', 'TITLE'], 'string', 'max' => 255],
            [['API_KEY'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'KODE_MODUL' => 'Kode  Modul',
            'MODUL_NM' => 'Modul  Nm',
            'KODE_USER' => 'Kode  User',
            'USERNAME' => 'Username',
            'TGL1' => 'Tgl1',
            'TGL2' => 'Tgl2',
            'STATUS' => 'Status',
            'DESKRIPSI' => 'Deskripsi',
            'API_KEY' => 'Api  Key',
            'KODE_KTG' => 'Kode  Ktg',
            'KTG_NM' => 'Ktg  Nm',
            'TITLE' => 'Title',
            'STATUS_QA' => 'Status  Qa',
        ];
    }
    public function getKtgnmpesan(){
        return $this->KTG_NM;
    }
    public function getModulnmpesan(){
        return $this->MODUL_NM;
    }
    public function getStatuspesan(){
        return $this->STATUS;
    }
    public function getStatusqapesan(){
        return $this->STATUS_QA;
    }
}
