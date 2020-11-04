<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers\Annotation;

use InvalidArgumentException;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\PhpDoc\VarTagValueNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use function in_array;
use function sprintf;
/**
 * @internal
 */
class VariableAnnotation extends \SlevomatCodingStandard\Helpers\Annotation\Annotation
{
    /** @var VarTagValueNode|null */
    private $contentNode;
    public function __construct(string $name, int $startPointer, int $endPointer, ?string $content, ?\_PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\PhpDoc\VarTagValueNode $contentNode)
    {
        if (!\in_array($name, ['@var', '@psalm-var', '@phpstan-var'], \true)) {
            throw new \InvalidArgumentException(\sprintf('Unsupported annotation %s.', $name));
        }
        parent::__construct($name, $startPointer, $endPointer, $content);
        $this->contentNode = $contentNode;
    }
    public function isInvalid() : bool
    {
        return $this->contentNode === null;
    }
    public function getContentNode() : \_PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\PhpDoc\VarTagValueNode
    {
        $this->errorWhenInvalid();
        return $this->contentNode;
    }
    public function hasDescription() : bool
    {
        return $this->getDescription() !== null;
    }
    public function getDescription() : ?string
    {
        $this->errorWhenInvalid();
        return $this->contentNode->description !== '' ? $this->contentNode->description : null;
    }
    public function getVariableName() : ?string
    {
        $this->errorWhenInvalid();
        return $this->contentNode->variableName !== '' ? $this->contentNode->variableName : null;
    }
    /**
     * @return GenericTypeNode|CallableTypeNode|IntersectionTypeNode|UnionTypeNode|ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|NullableTypeNode|ConstTypeNode
     */
    public function getType() : \_PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $this->errorWhenInvalid();
        /** @var GenericTypeNode|CallableTypeNode|IntersectionTypeNode|UnionTypeNode|ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|NullableTypeNode|ConstTypeNode $type */
        $type = $this->contentNode->type;
        return $type;
    }
    public function export() : string
    {
        $exported = \sprintf('%s %s', $this->name, \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::export($this->getType()));
        $variableName = $this->getVariableName();
        if ($variableName !== null) {
            $exported .= \sprintf(' %s', $variableName);
        }
        $description = $this->getDescription();
        if ($description !== null) {
            $exported .= \sprintf(' %s', $this->fixDescription($description));
        }
        return $exported;
    }
}