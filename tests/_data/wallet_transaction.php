<?php


return
[
    [ //transfer in to carol
        'id'=>4,
        'created_at'=>1627498299,
        'updated_at'=>1627498299,
        'user_id'=>147,
        'wallet_id'=>8,
        'wtx_type_id'=>30,
        'num_satoshis'=>100000,
        'ln_tx_id'=>null,
        'user_label'=>'Transfer in to Carol',
        'external_hash'=>'wtx_TransferIntoCarol',
        'json_data'=>null,
    ],
    [ //transfer out of carol
        'id'=>5,
        'created_at'=>1627498299,
        'updated_at'=>1627498299,
        'user_id'=>147,
        'wallet_id'=>8,
        'wtx_type_id'=>40,
        'num_satoshis'=>100,
        'ln_tx_id'=>null,
        'user_label'=>'Transfer out of Carol',
        'external_hash'=>'wtx_TransferOutOfCarol',
        'json_data'=>null,
    ],
    [ //carol receives payment from invoice
        'id'=>6,
        'created_at'=>1627498299,
        'updated_at'=>1627498299,
        'user_id'=>147,
        'wallet_id'=>8,
        'wtx_type_id'=>10,
        'num_satoshis'=>500,
        'ln_tx_id'=>20,
        'user_label'=>'Deposit into carol',
        'external_hash'=>'wtx_S0irddtjKlF0aZCN1FIcGOa7',
        'json_data'=>'{"wallet_id": "wal_testCarolTransactions"}',
    ],
    [ //transfer in to bob
        'id'=>7,
        'created_at'=>1627498299,
        'updated_at'=>1627498299,
        'user_id'=>147,
        'wallet_id'=>6,
        'wtx_type_id'=>30,
        'num_satoshis'=>1000,
        'ln_tx_id'=>null,
        'user_label'=>'Transfer in to Bob',
        'external_hash'=>'wtx_TransferIntoBob',
        'json_data'=>null,
    ],
];
