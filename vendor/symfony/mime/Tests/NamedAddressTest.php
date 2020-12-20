<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\Mime\Tests;

use _PhpScoperba24099fc6fd\PHPUnit\Framework\TestCase;
use _PhpScoperba24099fc6fd\Symfony\Component\Mime\NamedAddress;
class NamedAddressTest extends \_PhpScoperba24099fc6fd\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoperba24099fc6fd\Symfony\Component\Mime\NamedAddress('fabien@symfonï.com', 'Fabien');
        $this->assertEquals('Fabien', $a->getName());
        $this->assertEquals('fabien@symfonï.com', $a->getAddress());
        $this->assertEquals('Fabien <fabien@xn--symfon-nwa.com>', $a->toString());
        $this->assertEquals('fabien@xn--symfon-nwa.com', $a->getEncodedAddress());
    }
}
