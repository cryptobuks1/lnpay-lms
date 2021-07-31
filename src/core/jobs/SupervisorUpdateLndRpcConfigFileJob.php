<?php
namespace lnpay\core\jobs;

use lnpay\core\components\SupervisorComponent;

class SupervisorUpdateLndRpcConfigFileJob extends \yii\base\BaseObject implements \yii\queue\JobInterface
{
    public $listener_id;
    public $parameters;

    public function execute($queue)
    {
        SupervisorComponent::updateLndRpcConfigFile($this->listener_id,$this->parameters);
    }
}