<?php


use app\tests\fixtures\UserFixture;

class WalletGenerateInvoiceCest
{
    public function _fixtures()
    {
        return [
            'users' => [
                'class' => UserFixture::class,
            ],
            'wallets' => [
                'class' => \app\tests\fixtures\WalletFixture::class,
            ],
            'user_access_key' => [
                'class' => \app\tests\fixtures\UserAccessKeyFixture::class,
            ]
        ];
    }

    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    public function walletGenerateInvoiceLND(\ApiTester $I)
    {

    }
}
