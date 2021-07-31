<?php

namespace lnpay\fixtures;

use yii\test\ActiveFixture;

class LnTxFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\LnTx';
    public $depends = ['lnpay\node\fixtures\LnNodeFixture','lnpay\fixtures\UserFixture'];
    public $dataFile = '@app/tests/_data/ln_tx.php';
}