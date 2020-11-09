<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopere015d8a3273c\PHPUnit\Framework\TestCase;
use _PhpScopere015d8a3273c\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScopere015d8a3273c\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScopere015d8a3273c\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
