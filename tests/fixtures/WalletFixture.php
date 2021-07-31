<?php

namespace lnpay\fixtures;

use yii\test\ActiveFixture;

class WalletFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\wallet\Wallet';
    public $depends = [];
    public $dataFile = '@app/tests/_data/wallet.php';
}