<?php
namespace lnpay\core\models\wallet;

use lnpay\core\components\HelperComponent;
use lnpay\core\models\BalanceWithdraw;
use lnpay\core\models\LnTx;
use lnpay\core\models\wallet\WalletTransaction;
use yii\base\Model;
use lnpay\core\models\User;

use Yii;
use yii\web\BadRequestHttpException;
use yii\web\HttpException;
use yii\web\ServerErrorHttpException;

/**
 * Signup form
 */
class LnWalletDepositForm extends Model
{
    public $num_satoshis = NULL;
    public $memo = NULL;
    public $wallet_id = NULL;
    public $lnPayParams = [];

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wallet_id'], 'required'],
            [['num_satoshis'], 'compare', 'compareValue' => 0, 'operator' => '>='],
            [['memo','wallet_id'],'string'],
            ['wallet_id','checkWallet']
        ];
    }

    public function attributeLabels()
    {
        return [
            'payment_request'=>'Payment Request',
            'wallet_id'=>'Wallet ID'
        ];
    }

    public function getWalletObject()
    {
        return Wallet::findById($this->wallet_id);
    }

    public function checkWallet()
    {
        if (!$this->walletObject)
            throw new \yii\web\ServerErrorHttpException('Unknown wallet, cannot continue!');

        $this->walletObject->updateBalance();
    }
}
