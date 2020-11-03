<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan;

use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Param;
use _PhpScoper8de082cbb8c7\PhpParser\PrettyPrinter\Standard;
final class NodeComparator
{
    /**
     * @var Standard
     */
    private $printerStandard;
    public function __construct(\_PhpScoper8de082cbb8c7\PhpParser\PrettyPrinter\Standard $printerStandard)
    {
        $this->printerStandard = $printerStandard;
    }
    /**
     * @param Arg[] $methodCallArgs
     * @param Param[] $classMethodParams
     */
    public function areArgsAndParamsSame(array $methodCallArgs, array $classMethodParams) : bool
    {
        if (\count($methodCallArgs) !== \count($classMethodParams)) {
            return \false;
        }
        foreach ($methodCallArgs as $key => $arg) {
            $param = $classMethodParams[$key];
            $argContent = $this->printerStandard->prettyPrint([$arg]);
            $paramContent = $this->printerStandard->prettyPrint([$param]);
            if ($argContent === $paramContent) {
                continue;
            }
            return \false;
        }
        return \true;
    }
}
