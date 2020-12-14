<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\Mime\Tests;

use _PhpScoperc64a4ac1af35\PHPUnit\Framework\TestCase;
use _PhpScoperc64a4ac1af35\Symfony\Component\Mime\NamedAddress;
class NamedAddressTest extends \_PhpScoperc64a4ac1af35\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoperc64a4ac1af35\Symfony\Component\Mime\NamedAddress('fabien@symfonï.com', 'Fabien');
        $this->assertEquals('Fabien', $a->getName());
        $this->assertEquals('fabien@symfonï.com', $a->getAddress());
        $this->assertEquals('Fabien <fabien@xn--symfon-nwa.com>', $a->toString());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->getEncodedAddress());
    }
}
