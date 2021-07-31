<?php

namespace lnpay\fixtures;

use yii\db\ActiveRecord;
use yii\test\ActiveFixture;

class AuthItemChildFixture extends ActiveFixture
{
    public $depends = ['lnpay\fixtures\AuthItemFixture'];
    public $dataFile = '@app/tests/_data/auth_item_child.php';
    public $tableName = 'auth_item_child';
}