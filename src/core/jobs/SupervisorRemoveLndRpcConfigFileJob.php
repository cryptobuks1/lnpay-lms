<?php
namespace lnpay\core\jobs;

use lnpay\core\components\SupervisorComponent;

class SupervisorRemoveLndRpcConfigFileJob extends \yii\base\BaseObject implements \yii\queue\JobInterface
{
    public $file_name;

    public function execute($queue)
    {
        SupervisorComponent::removeLndRpcConfigFile($this->file_name);
    }
}