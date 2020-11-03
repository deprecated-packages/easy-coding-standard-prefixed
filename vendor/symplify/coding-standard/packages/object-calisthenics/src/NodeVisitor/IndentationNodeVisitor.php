<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\NodeVisitor;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\NodeVisitorAbstract;
use Symplify\CodingStandard\ObjectCalisthenics\Marker\IndentationMarker;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
final class IndentationNodeVisitor extends \_PhpScoper2b44cb0c30af\PhpParser\NodeVisitorAbstract
{
    /**
     * @var IndentationMarker
     */
    private $indentationMarker;
    public function __construct(\Symplify\CodingStandard\ObjectCalisthenics\Marker\IndentationMarker $indentationMarker)
    {
        $this->indentationMarker = $indentationMarker;
    }
    public function enterNode(\_PhpScoper2b44cb0c30af\PhpParser\Node $node)
    {
        $statementDepth = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::STATEMENT_DEPTH);
        if (!\is_int($statementDepth)) {
            return null;
        }
        $this->indentationMarker->markIndentation($statementDepth);
        return null;
    }
}
