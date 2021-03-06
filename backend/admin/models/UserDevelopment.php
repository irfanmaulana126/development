<?php

namespace backend\admin\models;

use Yii;

/**
 * This is the model class for table "user_development".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $avatar
 * @property string $TEMPLATE
 * @property string $avatarImage
 */
class UserDevelopment extends \yii\db\ActiveRecord
{
    public $newPassword;
    public $newPasswordConfirm;
    public $currentPassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_development';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['avatar', 'avatarImage'], 'string'],
            [['newPassword','currentPassword','newPasswordConfirm'],'required'],
            // [['currentPassword'],'validateCurrentPassword'],

            [['newPassword','newPasswordConfirm'],'string','min'=>6],
            [['newPassword','newPasswordConfirm'],'filter','filter'=>'trim'],
            [['newPasswordConfirm'],'compare','compareAttribute'=>'newPassword','message'=>'Password do not match'],
            
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['TEMPLATE'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'avatar' => 'Avatar',
            'TEMPLATE' => 'Template',
            'avatarImage' => 'Avatar Image',
        ];
    }
    public function validateCurrentPassword()
    {
       if(!$this->verifyPassword($this->currentPassword)){
           $this->addError("currentPassword","current Password incorrect");
       }
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
}
