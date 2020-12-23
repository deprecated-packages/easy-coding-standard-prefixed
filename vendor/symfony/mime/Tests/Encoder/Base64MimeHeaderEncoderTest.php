<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd9fcac9e904f\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperd9fcac9e904f\PHPUnit\Framework\TestCase;
use _PhpScoperd9fcac9e904f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperd9fcac9e904f\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperd9fcac9e904f\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
