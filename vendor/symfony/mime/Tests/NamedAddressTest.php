<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2f75f00bf6fa\Symfony\Component\Mime\Tests;

use _PhpScoper2f75f00bf6fa\PHPUnit\Framework\TestCase;
use _PhpScoper2f75f00bf6fa\Symfony\Component\Mime\NamedAddress;
class NamedAddressTest extends \_PhpScoper2f75f00bf6fa\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoper2f75f00bf6fa\Symfony\Component\Mime\NamedAddress('fabien@symfonï.com', 'Fabien');
        $this->assertEquals('Fabien', $a->getName());
        $this->assertEquals('fabien@symfonï.com', $a->getAddress());
        $this->assertEquals('Fabien <fabien@xn--symfon-nwa.com>', $a->toString());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->getEncodedAddress());
    }
}
