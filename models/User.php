<?php

namespace app\models;
use yii\db\ActiveRecord;;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    public static function tableName()
    {

        return 'SEG_SEMED.TB_SEG_USUARIO';

    }

    public static function findIdentity($id)
    {

        $user = User::findOne(['USU_ID_USUARIO'=>$id]);
        return new static($user);
        
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

        return static::findOne(['access_token' => $token]);

    }

    public static function findByUsername($username)
    {

        $user = USER::findOne(['USU_NOME'=>$username]);
        if(strcasecmp($user->USU_NOME, $username)===0){
            return new static($user);
        }
        return null;

    }

    public function getId()
    {

        return $this->USU_ID_USUARIO;

    }

    public function getUsername()
    {

        return $this->USU_NOME;

    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {

        return $this->USU_SENHA === strtoupper(md5($password)); 

    }

}
