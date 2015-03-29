<?php

/*
 * This file is part of the kristofvc/contact component.
 *
 * (c) Kristof Van Cauwenbergh
 *
 * For the full copyright and license information, please view the meta/LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Kristofvc\Contact\Provider;

use Kristofvc\Contact\Model\Contact;
use Kristofvc\Contact\Provider\SimpleMessageProvider;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SimpleMessageProviderSpec
 * @package spec\Kristofvc\Contact\Provider
 *
 * @author Kristof Van Cauwenbergh <kristof.vancauwenbergh@gmail.com>
 *
 * @mixin SimpleMessageProvider
 */
class SimpleMessageProviderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kristofvc\Contact\Provider\SimpleMessageProvider');
    }

    function it_should_implement_message_provider_interface()
    {
        $this->shouldImplement('Kristofvc\Contact\Provider\MessageProviderInterface');
    }

    function it_should_have_a_message()
    {
        $contact = new Contact();
        $contact->setName('Kristof');
        $this->getMessage($contact)->shouldReturn('Thank you for sending me a message Kristof!');
    }
}
