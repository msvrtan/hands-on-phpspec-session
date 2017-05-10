<?php

namespace spec\ORM;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EntityManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ORM\EntityManager');
    }

    function it_will_save()
    {
        $this->save(Argument::any())->shouldReturn(true);
    }
}
