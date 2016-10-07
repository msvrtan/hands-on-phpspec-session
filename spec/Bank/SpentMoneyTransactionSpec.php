<?php

namespace spec\Bank;

use Bank\SpendingAccount;
use Money\Money;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpentMoneyTransactionSpec extends ObjectBehavior
{
    public function let(SpendingAccount $spendingAccount, Money $money)
    {
        $this->beConstructedWith($spendingAccount, $money);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Bank\SpentMoneyTransaction');
    }
}
