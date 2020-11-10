<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere5e7dca8c031\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopere5e7dca8c031\PHPUnit\Framework\TestCase;
use _PhpScopere5e7dca8c031\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopere5e7dca8c031\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopere5e7dca8c031\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
