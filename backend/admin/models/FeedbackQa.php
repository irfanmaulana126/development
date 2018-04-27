<?php

namespace backend\admin\models;

use Yii;

/**
 * This is the model class for table "feedback_qa".
 *
 * @property string $ID
 * @property string $ID_OPEN_TIKET
 * @property string $DESKRIPSI
 * @property int $STATUS
 * @property string $TGL
 * @property string $ID_USER_OPEN_TICKET
 * @property string $ID_USER_QA
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
            [['ID', 'STATUS'], 'integer'],
            [['DESKRIPSI'], 'string'],
            [['TGL'], 'safe'],
            [['ID_OPEN_TIKET', 'ID_USER_OPEN_TICKET', 'ID_USER_QA'], 'string', 'max' => 255],
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
            'ID_USER_OPEN_TICKET' => 'Id  User  Open  Ticket',
            'ID_USER_QA' => 'Id  User  Qa',
        ];
    }
}
