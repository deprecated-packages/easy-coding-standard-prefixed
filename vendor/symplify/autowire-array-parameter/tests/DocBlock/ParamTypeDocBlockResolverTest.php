<?php

declare (strict_types=1);
namespace Symplify\AutowireArrayParameter\Tests\DocBlock;

use Iterator;
use _PhpScopere66f4b626446\PHPUnit\Framework\TestCase;
use Symplify\AutowireArrayParameter\DocBlock\ParamTypeDocBlockResolver;
final class ParamTypeDocBlockResolverTest extends \_PhpScopere66f4b626446\PHPUnit\Framework\TestCase
{
    /**
     * @var ParamTypeDocBlockResolver
     */
    private $paramTypeDocBlockResolver;
    protected function setUp() : void
    {
        $this->paramTypeDocBlockResolver = new \Symplify\AutowireArrayParameter\DocBlock\ParamTypeDocBlockResolver();
    }
    /**
     * @dataProvider provideData()
     */
    public function test(string $docBlock, string $parameterName, string $expectedType) : void
    {
        $resolvedType = $this->paramTypeDocBlockResolver->resolve($docBlock, $parameterName);
        $this->assertSame($expectedType, $resolvedType);
    }
    public function provideData() : \Iterator
    {
        (yield ['/** @param Type[] $name */', 'name', 'Type']);
        (yield ['/** @param array<Type> $name */', 'name', 'Type']);
        (yield ['/** @param iterable<Type> $name */', 'name', 'Type']);
    }
    /**
     * @dataProvider provideDataMissmatchName()
     */
    public function testMissmatchName(string $docBlock, string $parameterName) : void
    {
        $resolvedType = $this->paramTypeDocBlockResolver->resolve($docBlock, $parameterName);
        $this->assertNull($resolvedType);
    }
    /**
     * @return Iterator<string[]>
     */
    public function provideDataMissmatchName() : \Iterator
    {
        (yield ['/** @param Type[] $name */', '___not']);
    }
}
