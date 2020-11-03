<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PhpParser;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
final class FileExistFuncCallAnalyzer
{
    public function isBeingCheckedIfExists(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : bool
    {
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parent instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Arg) {
            return \false;
        }
        $parentParent = $parent->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parentParent instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node) {
            return \false;
        }
        return $this->isFileCheckingFuncCall($parentParent);
    }
    public function isFileCheckingFuncCall(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : bool
    {
        if (!$node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall) {
            return \false;
        }
        if ($node->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return \false;
        }
        $funcCallName = (string) $node->name;
        return \in_array($funcCallName, ['is_file', 'file_exists', 'is_dir'], \true);
    }
    public function hasParentIfWithFileExistCheck(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\BinaryOp\Concat $concat) : bool
    {
        $parent = $concat->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($parent !== null) {
            if ($parent instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_ && $this->isFileCheckingFuncCall($parent->cond)) {
                return \true;
            }
            $parent = $parent->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return \false;
    }
}
