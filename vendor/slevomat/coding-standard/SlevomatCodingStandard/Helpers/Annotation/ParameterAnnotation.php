<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers\Annotation;

use InvalidArgumentException;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\PhpDoc\ParamTagValueNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use function in_array;
use function sprintf;
/**
 * @internal
 */
class ParameterAnnotation extends \SlevomatCodingStandard\Helpers\Annotation\Annotation
{
    /** @var ParamTagValueNode|null */
    private $contentNode;
    public function __construct(string $name, int $startPointer, int $endPointer, ?string $content, ?\_PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\PhpDoc\ParamTagValueNode $contentNode)
    {
        if (!\in_array($name, ['@param', '@psalm-param', '@phpstan-param'], \true)) {
            throw new \InvalidArgumentException(\sprintf('Unsupported annotation %s.', $name));
        }
        parent::__construct($name, $startPointer, $endPointer, $content);
        $this->contentNode = $contentNode;
    }
    public function isInvalid() : bool
    {
        return $this->contentNode === null;
    }
    public function getContentNode() : \_PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\PhpDoc\ParamTagValueNode
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
    public function getParameterName() : string
    {
        $this->errorWhenInvalid();
        return $this->contentNode->parameterName;
    }
    /**
     * @return GenericTypeNode|CallableTypeNode|IntersectionTypeNode|UnionTypeNode|ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|NullableTypeNode|ConstTypeNode
     */
    public function getType() : \_PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $this->errorWhenInvalid();
        /** @var GenericTypeNode|CallableTypeNode|IntersectionTypeNode|UnionTypeNode|ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|NullableTypeNode|ConstTypeNode $type */
        $type = $this->contentNode->type;
        return $type;
    }
    public function export() : string
    {
        $exported = \sprintf('%s %s %s%s', $this->name, \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::export($this->getType()), $this->contentNode->isVariadic ? '...' : '', $this->getParameterName());
        $description = $this->getDescription();
        if ($description !== null) {
            $exported .= \sprintf(' %s', $this->fixDescription($description));
        }
        return $exported;
    }
}
