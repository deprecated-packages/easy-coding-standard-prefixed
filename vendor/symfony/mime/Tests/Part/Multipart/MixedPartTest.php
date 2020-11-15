<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera189153e1f79\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopera189153e1f79\PHPUnit\Framework\TestCase;
use _PhpScopera189153e1f79\Symfony\Component\Mime\Part\Multipart\MixedPart;
class MixedPartTest extends \_PhpScopera189153e1f79\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScopera189153e1f79\Symfony\Component\Mime\Part\Multipart\MixedPart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('mixed', $a->getMediaSubtype());
    }
}
