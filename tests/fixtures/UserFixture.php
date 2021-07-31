<?php

namespace lnpay\fixtures;

use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\User';
    public $depends = [];
    public $dataFile = '@app/tests/_data/user.php';
}