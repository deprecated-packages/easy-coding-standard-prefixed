<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\NodeAnalyzer;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Comment\Doc;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassConst;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Property;
final class TypeNodeAnalyzer
{
    /**
     * @var string
     * @see https://regex101.com/r/Wy4mO2/2
     */
    public const KERNEL_REGEX = '#@var\\s+(\\\\Symfony\\\\Component\\\\HttpKernel\\\\)?KernelInterface\\n?#';
    /**
     * @var string
     * @see https://regex101.com/r/eCXekv/3
     */
    public const CONTAINER_REGEX = '#@var\\s+(\\\\Psr\\\\Container\\\\)?ContainerInterface|(\\\\Symfony\\\\Component\\\\DependencyInjection\\\\)?Container\\n?$#';
    /**
     * @param Property|ClassConst $node
     */
    public function isStaticAndContainerOrKernelType(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool
    {
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassConst) {
            return \false;
        }
        if (!$node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Property) {
            return \false;
        }
        if (!$node->isStatic()) {
            return \false;
        }
        $docComment = $node->getDocComment();
        if (!$docComment instanceof \_PhpScoper2b44cb0c30af\PhpParser\Comment\Doc) {
            return \false;
        }
        $docCommentText = $docComment->getText();
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($docCommentText, self::KERNEL_REGEX)) {
            return \true;
        }
        return (bool) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($docCommentText, self::CONTAINER_REGEX);
    }
}
