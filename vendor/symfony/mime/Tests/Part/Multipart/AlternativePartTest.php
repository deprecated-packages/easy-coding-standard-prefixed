<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperba24099fc6fd\PHPUnit\Framework\TestCase;
use _PhpScoperba24099fc6fd\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScoperba24099fc6fd\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScoperba24099fc6fd\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
