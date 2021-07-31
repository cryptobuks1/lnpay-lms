<?php

namespace lnpay\node\fixtures;

use yii\test\ActiveFixture;

class LnNodeDefaultWalletsFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\wallet\Wallet';
    public $depends = [];
    public $dataFile = '@app/node/fixtures/_data/ln_node_default_wallets.php';
}