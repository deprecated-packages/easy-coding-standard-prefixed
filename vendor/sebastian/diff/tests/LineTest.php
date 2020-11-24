<?php

declare (strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd675aaf00c76\SebastianBergmann\Diff;

use _PhpScoperd675aaf00c76\PHPUnit\Framework\TestCase;
/**
 * @covers SebastianBergmann\Diff\Line
 */
final class LineTest extends \_PhpScoperd675aaf00c76\PHPUnit\Framework\TestCase
{
    /**
     * @var Line
     */
    private $line;
    protected function setUp() : void
    {
        $this->line = new \_PhpScoperd675aaf00c76\SebastianBergmann\Diff\Line();
    }
    public function testCanBeCreatedWithoutArguments() : void
    {
        $this->assertInstanceOf(\_PhpScoperd675aaf00c76\SebastianBergmann\Diff\Line::class, $this->line);
    }
    public function testTypeCanBeRetrieved() : void
    {
        $this->assertSame(\_PhpScoperd675aaf00c76\SebastianBergmann\Diff\Line::UNCHANGED, $this->line->getType());
    }
    public function testContentCanBeRetrieved() : void
    {
        $this->assertSame('', $this->line->getContent());
    }
}
