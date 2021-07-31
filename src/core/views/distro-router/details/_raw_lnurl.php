
<?php /*
    $hose = $model->addHose(\lnpay\core\models\DistroMethod::findOne(\lnpay\core\models\DistroMethod::RAW_LNURL));
?>
HOSE TAG: <?=$hose->faucet_tag;?>

 <?php */?>
<pre><code><?=@file_get_contents($model->baseLink->getUrl([],\lnpay\core\models\DistroMethod::NAME_RAW_LNURL));?></code></pre>