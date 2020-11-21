<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera4be459e5e3d\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopera4be459e5e3d\PHPUnit\Framework\TestCase;
use _PhpScopera4be459e5e3d\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopera4be459e5e3d\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopera4be459e5e3d\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
