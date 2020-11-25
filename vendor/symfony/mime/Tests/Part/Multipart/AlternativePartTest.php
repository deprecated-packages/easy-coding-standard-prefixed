<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaac5f7c652e4\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperaac5f7c652e4\PHPUnit\Framework\TestCase;
use _PhpScoperaac5f7c652e4\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScoperaac5f7c652e4\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoperaac5f7c652e4\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
