<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf3d5f0921050\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperf3d5f0921050\PHPUnit\Framework\TestCase;
use _PhpScoperf3d5f0921050\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperf3d5f0921050\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperf3d5f0921050\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
