<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class AuthAssignmentFixture extends ActiveFixture
{
    public $modelClass = 'app\models\AuthAssignmentFixture';
    public $depends = ['app\tests\fixtures\UserAccessKeyFixture'];
    public $dataFile = '@app/tests/_data/auth_assignment.php';
}