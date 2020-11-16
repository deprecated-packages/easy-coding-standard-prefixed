<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperedc2e0c967db\PHPUnit\Framework\TestCase;
use _PhpScoperedc2e0c967db\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperedc2e0c967db\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperedc2e0c967db\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
