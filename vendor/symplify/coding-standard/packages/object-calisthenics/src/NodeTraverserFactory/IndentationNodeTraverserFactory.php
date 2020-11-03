<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\NodeTraverserFactory;

use _PhpScoper2b44cb0c30af\PhpParser\NodeTraverser;
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
    public function create() : \_PhpScoper2b44cb0c30af\PhpParser\NodeTraverser
    {
        $nodeTraverser = new \_PhpScoper2b44cb0c30af\PhpParser\NodeTraverser();
        $nodeTraverser->addVisitor($this->indentationNodeVisitor);
        return $nodeTraverser;
    }
}
