<?php

namespace lnpay\fixtures;

use yii\test\ActiveFixture;

class WalletTransactionFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\wallet\WalletTransaction';
    public $depends = ['lnpay\fixtures\WalletFixture','lnpay\fixtures\LnTxFixture','lnpay\fixtures\UserFixture'];
    public $dataFile = '@app/tests/_data/wallet_transaction.php';
}