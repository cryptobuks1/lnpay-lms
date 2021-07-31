<?php

namespace lnpay\fixtures;

use yii\test\ActiveFixture;

class UserAccessKeyFixture extends ActiveFixture
{
    public $modelClass = 'lnpay\core\models\UserAccessKey';
    public $depends = ['lnpay\fixtures\WalletFixture','lnpay\fixtures\AuthAssignmentFixture'];
    public $dataFile = '@app/tests/_data/user_access_key.php';
}