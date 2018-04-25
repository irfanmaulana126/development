<?php

namespace backend\qualitycontrol\models;

use Yii;

/**
 * This is the model class for table "feedback_qa".
 *
 * @property string $ID
 * @property string $ID_OPEN_TIKET
 * @property string $DESKRIPSI
 * @property int $STATUS
 * @property string $TGL
 * @property string $ID_USER
 * @property string $USER_NM
 */
class FeedbackQa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback_qa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DESKRIPSI'], 'string'],
            [['STATUS'], 'integer'],
            [['TGL'], 'safe'],
            [['ID_OPEN_TIKET', 'ID_USER', 'USER_NM'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ID_OPEN_TIKET' => 'Id  Open  Tiket',
            'DESKRIPSI' => 'Deskripsi',
            'STATUS' => 'Status',
            'TGL' => 'Tgl',
            'ID_USER' => 'Id  User',
            'USER_NM' => 'User  Nm',
        ];
    }
}
