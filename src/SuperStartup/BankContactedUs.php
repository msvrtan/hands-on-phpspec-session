<?php

namespace SuperStartup;

use Bank\SaveMoneyTransaction;
use Bank\SpentMoneyTransaction;

class BankContactedUs
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        // TODO: write logic here
        $this->userRepository = $userRepository;
    }

    public function doWork(SpentMoneyTransaction $spentMoneyTransaction)
    {
        return new SaveMoneyTransaction();
    }
}
