<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers\Annotation;

use InvalidArgumentException;
use _PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\PhpDoc\MixinTagValueNode;
use _PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use _PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use function sprintf;
/**
 * @internal
 */
class MixinAnnotation extends \SlevomatCodingStandard\Helpers\Annotation\Annotation
{
    /** @var MixinTagValueNode|null */
    private $contentNode;
    public function __construct(string $name, int $startPointer, int $endPointer, ?string $content, ?\_PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\PhpDoc\MixinTagValueNode $contentNode)
    {
        if ($name !== '@mixin') {
            throw new \InvalidArgumentException(\sprintf('Unsupported annotation %s.', $name));
        }
        parent::__construct($name, $startPointer, $endPointer, $content);
        $this->contentNode = $contentNode;
    }
    public function isInvalid() : bool
    {
        return $this->contentNode === null;
    }
    public function getContentNode() : \_PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\PhpDoc\MixinTagValueNode
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
     * @return GenericTypeNode|IdentifierTypeNode
     */
    public function getType() : \_PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $this->errorWhenInvalid();
        /** @var GenericTypeNode|IdentifierTypeNode $type */
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
