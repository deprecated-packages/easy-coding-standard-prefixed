<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\NodeTraverserFactory;

use _PhpScoper3d04c8135695\PhpParser\NodeTraverser;
use Symplify\CodingStandard\ObjectCalisthenics\NodeVisitor\IndentationNodeVisitor;
final class IndentationNodeTraverserFactory
{
    /**
     * @var IndentationNodeVisitor
     */
    private $indentationNodeVisitor;
    public function __construct(\Symplify\CodingStandard\ObjectCalisthenics\NodeVisitor\IndentationNodeVisitor $indentationNodeVisitor)
    {
        $this->indentationNodeVisitor = $indentationNodeVisitor;
    }
    public function create() : \_PhpScoper3d04c8135695\PhpParser\NodeTraverser
    {
        $nodeTraverser = new \_PhpScoper3d04c8135695\PhpParser\NodeTraverser();
        $nodeTraverser->addVisitor($this->indentationNodeVisitor);
        return $nodeTraverser;
    }
}
