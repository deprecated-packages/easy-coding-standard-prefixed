<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers\Annotation;

use InvalidArgumentException;
use _PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\PhpDoc\UsesTagValueNode;
use _PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use function in_array;
use function sprintf;
/**
 * @internal
 */
class UseAnnotation extends \SlevomatCodingStandard\Helpers\Annotation\Annotation
{
    /** @var UsesTagValueNode|null */
    private $contentNode;
    public function __construct(string $name, int $startPointer, int $endPointer, ?string $content, ?\_PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\PhpDoc\UsesTagValueNode $contentNode)
    {
        if (!\in_array($name, ['@use', '@template-use', '@phpstan-use'], \true)) {
            throw new \InvalidArgumentException(\sprintf('Unsupported annotation %s.', $name));
        }
        parent::__construct($name, $startPointer, $endPointer, $content);
        $this->contentNode = $contentNode;
    }
    public function isInvalid() : bool
    {
        return $this->contentNode === null;
    }
    public function getContentNode() : \_PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\PhpDoc\UsesTagValueNode
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
    public function getType() : \_PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode
    {
        $this->errorWhenInvalid();
        return $this->contentNode->type;
    }
    public function export() : string
    {
        $exported = \sprintf('%s %s', $this->name, \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::export($this->getType()));
        $description = $this->getDescription();
        if ($description !== null) {
            $exported .= \sprintf(' %s', $this->fixDescription($description));
        }
        return $exported;
    }
}
