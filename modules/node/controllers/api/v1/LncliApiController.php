<?php

namespace app\modules\node\controllers\api\v1;

use app\modules\node\models\LnNode;
use Yii;
use yii\web\BadRequestHttpException;

class LncliApiController extends NodeApiController
{
    public $modelClass = 'app\modules\node\models\LnNode';

    public function actionLookupinvoice($r_hash_str,$node_id)
    {
        try {
            return $this->nodeObject->getLndConnector()->lookupInvoice($r_hash_str);
        } catch (\Throwable $t) {
            throw new BadRequestHttpException($t->getMessage());
        }
    }
}
