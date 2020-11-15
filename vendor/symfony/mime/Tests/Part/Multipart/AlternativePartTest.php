<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb576ca159b5\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScopercb576ca159b5\PHPUnit\Framework\TestCase;
use _PhpScopercb576ca159b5\Symfony\Component\Mime\Part\Multipart\AlternativePart;
class AlternativePartTest extends \_PhpScopercb576ca159b5\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $a = new \_PhpScopercb576ca159b5\Symfony\Component\Mime\Part\Multipart\AlternativePart();
        $this->assertEquals('multipart', $a->getMediaType());
        $this->assertEquals('alternative', $a->getMediaSubtype());
    }
}
