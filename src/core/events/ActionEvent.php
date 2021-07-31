<?php

namespace lnpay\core\events;

use lnpay\core\components\MailerComponent;
use Yii;

use yii\base\Component;
use yii\base\Event;

use lnpay\core\models\action\ActionFeed;
use lnpay\core\models\action\ActionName;
use lnpay\core\models\User;


class ActionEvent extends Event
{
    public $_customData = [];
    public $action_id;

    public $_userObject = NULL;


    public function __construct($d=[]) {
        $this->_customData = $d;
        parent::__construct();
    }

    public function getUserObject()
    {
        if ($this->_userObject)
            return $this->_userObject;
        else if (Yii::$app instanceof \yii\web\Application)
            return User::findOne(Yii::$app->user->id);
        else
            throw new \Exception('User id is missing!');

    }

    public function setUserObject($userObject)
    {
        $this->_userObject = $userObject;
    }

    public function getActionNameObject()
    {
        return ActionName::findOne($this->action_id);
    }

    public function getCustomData()
    {
        return $this->_customData;
    }



}