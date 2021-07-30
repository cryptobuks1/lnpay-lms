<?php

namespace app\events;

use app\components\MailerComponent;
use Yii;

use yii\base\Component;
use yii\base\Event;

use app\models\action\ActionFeed;
use app\models\action\ActionName;
use app\models\User;


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