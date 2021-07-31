<?php

namespace lnpay\fixtures;

use yii\test\ActiveFixture;

class WalletTransactionTypeFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\wallet\WalletTransactionType';
    public $depends = [];
    public $dataFile = '@app/tests/_data/wallet_transaction_type.php';
}