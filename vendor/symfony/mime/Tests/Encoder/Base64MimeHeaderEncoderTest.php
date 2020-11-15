<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper207eb8f99af3\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoper207eb8f99af3\PHPUnit\Framework\TestCase;
use _PhpScoper207eb8f99af3\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoper207eb8f99af3\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoper207eb8f99af3\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
