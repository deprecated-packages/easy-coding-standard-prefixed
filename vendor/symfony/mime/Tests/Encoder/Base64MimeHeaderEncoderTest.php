<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere205696a9dd6\Symfony\Component\Mime\Tests\Encoder;

use _PhpScopere205696a9dd6\PHPUnit\Framework\TestCase;
use _PhpScopere205696a9dd6\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScopere205696a9dd6\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScopere205696a9dd6\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
