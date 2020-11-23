<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd4c5032f0671\Symfony\Component\Mime\Tests;

use _PhpScoperd4c5032f0671\PHPUnit\Framework\TestCase;
use _PhpScoperd4c5032f0671\Symfony\Component\Mime\RawMessage;
class RawMessageTest extends \_PhpScoperd4c5032f0671\PHPUnit\Framework\TestCase
{
    public function testToString()
    {
        $message = new \_PhpScoperd4c5032f0671\Symfony\Component\Mime\RawMessage('string');
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', \implode('', \iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', \implode('', \iterator_to_array($message->toIterable())));
        $message = new \_PhpScoperd4c5032f0671\Symfony\Component\Mime\RawMessage(new \ArrayObject(['some', ' ', 'string']));
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', \implode('', \iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', \implode('', \iterator_to_array($message->toIterable())));
    }
}
