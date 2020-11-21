<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoper224ae0b86670\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class MethodTagValueNode implements \_PhpScoper224ae0b86670\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var bool */
    public $isStatic;
    /** @var TypeNode|null */
    public $returnType;
    /** @var string */
    public $methodName;
    /** @var MethodTagValueParameterNode[] */
    public $parameters;
    /** @var string (may be empty) */
    public $description;
    public function __construct(bool $isStatic, ?\_PhpScoper224ae0b86670\PHPStan\PhpDocParser\Ast\Type\TypeNode $returnType, string $methodName, array $parameters, string $description)
    {
        $this->isStatic = $isStatic;
        $this->returnType = $returnType;
        $this->methodName = $methodName;
        $this->parameters = $parameters;
        $this->description = $description;
    }
    public function __toString() : string
    {
        $static = $this->isStatic ? 'static ' : '';
        $returnType = $this->returnType !== null ? "{$this->returnType} " : '';
        $parameters = \implode(', ', $this->parameters);
        $description = $this->description !== '' ? " {$this->description}" : '';
        return "{$static}{$returnType}{$this->methodName}({$parameters}){$description}";
    }
}
