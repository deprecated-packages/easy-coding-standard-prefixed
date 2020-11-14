<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperecb978830f1e\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperecb978830f1e\PHPUnit\Framework\TestCase;
use _PhpScoperecb978830f1e\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperecb978830f1e\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperecb978830f1e\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
