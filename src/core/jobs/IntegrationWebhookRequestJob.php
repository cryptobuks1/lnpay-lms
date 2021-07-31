<?php
namespace lnpay\core\jobs;



use lnpay\core\components\ActionComponent;
use lnpay\core\models\integration\IntegrationWebhookRequest;
use yii\queue\RetryableJobInterface;

class IntegrationWebhookRequestJob extends \yii\base\BaseObject implements RetryableJobInterface
{
    public $iwhr_id;

    public function execute($queue)
    {
        $iwhr = IntegrationWebhookRequest::findOne($this->iwhr_id);
        ActionComponent::webhookRequest($iwhr);
    }

    public function getTtr()
    {
        return 10;
    }

    public function canRetry($attempt, $error)
    {
        return false;
    }

    public function getAttempts()
    {
        return 1;
    }

}