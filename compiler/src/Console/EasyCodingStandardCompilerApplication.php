<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\Console;

use _PhpScoper2b44cb0c30af\Symfony\Component\Console\Application;
use Symplify\EasyCodingStandard\Compiler\Command\CompileCommand;
final class EasyCodingStandardCompilerApplication extends \_PhpScoper2b44cb0c30af\Symfony\Component\Console\Application
{
    public function __construct(\Symplify\EasyCodingStandard\Compiler\Command\CompileCommand $compileCommand)
    {
        parent::__construct('ecs.phar Compiler', 'v1.0');
        $this->add($compileCommand);
        $this->setDefaultCommand(\Symplify\EasyCodingStandard\Compiler\Command\CompileCommand::NAME, \true);
    }
}
