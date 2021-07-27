<?php


use app\tests\fixtures\UserFixture;

class WalletAuthCest
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


    public function walletReadByKeySuccess(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletWithdrawByKeySuccess(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletWithdrawByKeyFail(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletLnurlWithdrawPublicByKeySuccess(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletLnurlWithdrawPublicByKeyFail(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletInvoiceByKeySuccess(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletInvoiceByKeyFail(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletTransferByKeySuccess(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }

    public function walletTransferByKeyFail(\ApiTester $I)
    {
        //@TODO:[WalletTest] Implement this
    }
}
