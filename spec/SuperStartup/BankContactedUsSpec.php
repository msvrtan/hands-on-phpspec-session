<?php

namespace spec\SuperStartup;

use Bank\SaveMoneyTransaction;
use Bank\SpentMoneyTransaction;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SuperStartup\UserRepository;

class BankContactedUsSpec extends ObjectBehavior
{
    function let(SpentMoneyTransaction $moneyTransaction, UserRepository $userRepository)
    {
        $this->beConstructedWith($userRepository);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('SuperStartup\BankContactedUs');
    }

    function it_should_do_the_job($moneyTransaction)
    {
        $this->doWork($moneyTransaction)->shouldReturnAnInstanceOf(SaveMoneyTransaction::class);

    }
}
