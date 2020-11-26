<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb217fd4e736\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopercb217fd4e736\PHPUnit\Framework\TestCase;
use _PhpScopercb217fd4e736\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScopercb217fd4e736\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScopercb217fd4e736\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
