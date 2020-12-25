<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers\Annotation;

use InvalidArgumentException;
use _PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\PhpDoc\ThrowsTagValueNode;
use _PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use _PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use function in_array;
use function sprintf;
/**
 * @internal
 */
class ThrowsAnnotation extends \SlevomatCodingStandard\Helpers\Annotation\Annotation
{
    /** @var ThrowsTagValueNode|null */
    private $contentNode;
    public function __construct(string $name, int $startPointer, int $endPointer, ?string $content, ?\_PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\PhpDoc\ThrowsTagValueNode $contentNode)
    {
        if (!\in_array($name, ['@throws', '@phpstan-throws'], \true)) {
            throw new \InvalidArgumentException(\sprintf('Unsupported annotation %s.', $name));
        }
        parent::__construct($name, $startPointer, $endPointer, $content);
        $this->contentNode = $contentNode;
    }
    public function isInvalid() : bool
    {
        return $this->contentNode === null;
    }
    public function getContentNode() : \_PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\PhpDoc\ThrowsTagValueNode
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
    /**
     * @return UnionTypeNode|IdentifierTypeNode
     */
    public function getType() : \_PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $this->errorWhenInvalid();
        /** @var UnionTypeNode|IdentifierTypeNode $type */
        $type = $this->contentNode->type;
        return $type;
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
