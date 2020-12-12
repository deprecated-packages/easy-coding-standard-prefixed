<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdaf95aff095b\Symfony\Component\Mime\Tests\Encoder;

use _PhpScoperdaf95aff095b\PHPUnit\Framework\TestCase;
use _PhpScoperdaf95aff095b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;
class Base64MimeHeaderEncoderTest extends \_PhpScoperdaf95aff095b\PHPUnit\Framework\TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new \_PhpScoperdaf95aff095b\Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder())->getName());
    }
}
