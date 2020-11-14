<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperddde3ba4aebc\PHPUnit\Framework\TestCase;
use _PhpScoperddde3ba4aebc\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperddde3ba4aebc\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
