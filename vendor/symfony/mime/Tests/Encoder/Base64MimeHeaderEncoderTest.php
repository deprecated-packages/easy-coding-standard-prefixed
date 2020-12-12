<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperef870243cfdb\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperef870243cfdb\PHPUnit\Framework\TestCase;
use _PhpScoperef870243cfdb\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperef870243cfdb\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperef870243cfdb\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
