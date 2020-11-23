<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4b135661b3a\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperc4b135661b3a\PHPUnit\Framework\TestCase;
use _PhpScoperc4b135661b3a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperc4b135661b3a\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperc4b135661b3a\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
