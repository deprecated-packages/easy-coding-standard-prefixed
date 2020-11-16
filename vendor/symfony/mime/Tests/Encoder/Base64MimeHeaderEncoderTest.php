<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad4605bb9267\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperad4605bb9267\PHPUnit\Framework\TestCase;
use _PhpScoperad4605bb9267\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperad4605bb9267\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperad4605bb9267\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
