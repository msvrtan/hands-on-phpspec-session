<?php

namespace MyBank;

class SavingsService
{
    private $api;

    /**
     * SavingsService constructor.
     *
     * @param $api
     */
    public function __construct(BankServiceAPI $api)
    {
        $this->api = $api;
    }

    public function doWork()
    {
        foreach ($this->api->getSubscribedUsers() as $user) {
            if (!$user->isCheckingAccountRounded()) {

                $this->api->transferMoney(
                    $user->getCheckingAccount()->getAccountNumber(),
                    $user->getSavingsAccount()->getAccountNumber(),
                    $user->getAmountToSavings()
                );

            }
        }
    }

}
