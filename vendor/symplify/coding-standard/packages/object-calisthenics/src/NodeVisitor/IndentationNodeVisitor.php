<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\NodeVisitor;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\NodeVisitorAbstract;
use Symplify\CodingStandard\ObjectCalisthenics\Marker\IndentationMarker;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
final class IndentationNodeVisitor extends \_PhpScoper3d04c8135695\PhpParser\NodeVisitorAbstract
{
    /**
     * @var IndentationMarker
     */
    private $indentationMarker;
    public function __construct(\Symplify\CodingStandard\ObjectCalisthenics\Marker\IndentationMarker $indentationMarker)
    {
        $this->indentationMarker = $indentationMarker;
    }
    public function enterNode(\_PhpScoper3d04c8135695\PhpParser\Node $node)
    {
        $statementDepth = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::STATEMENT_DEPTH);
        if (!\is_int($statementDepth)) {
            return null;
        }
        $this->indentationMarker->markIndentation($statementDepth);
        return null;
    }
}
