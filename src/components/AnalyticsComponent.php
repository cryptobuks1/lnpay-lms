<?php
namespace lnpay\components;

use lnpay\jobs\AnalyticsLogJob;
use Yii;
use yii\base\BaseObject;
use yii\base\Component;


class AnalyticsComponent extends Component
{
    public static function log($userId,$eventName,$params=[])
    {
        if (getenv('AMPLITUDE_API_KEY')) {
            \LNPay::$app->queue->priority(2048)->push(new AnalyticsLogJob([
                'userId' => $userId,
                'eventName' => $eventName,
                'params'=>$params
            ]));
        }
    }

    public static function executeLog($userId,$eventName,$params=[])
    {
        if (getenv('AMPLITUDE_API_KEY')) {
            if (!YII_ENV_TEST) {
                $amplitude = new \Zumba\Amplitude\Amplitude();
                $amplitude->init(getenv('AMPLITUDE_API_KEY'), $userId);
                $amplitude->logEvent($eventName,$params);
            }
        }
    }

}
