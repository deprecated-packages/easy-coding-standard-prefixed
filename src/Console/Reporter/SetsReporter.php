<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Reporter;

use _PhpScopera9d6b451df71\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\SmartFileSystem\SmartFileInfo;
final class SetsReporter
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    public function __construct(\_PhpScopera9d6b451df71\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider)
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->parameterProvider = $parameterProvider;
    }
    public function report() : void
    {
        $sets = (array) $this->parameterProvider->provideParameter(\Symplify\EasyCodingStandard\ValueObject\Option::SETS);
        if ($sets === []) {
            return;
        }
        $this->symfonyStyle->title('Loaded Sets');
        \sort($sets);
        foreach ($sets as $set) {
            $setFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($set);
            $filename = $setFileInfo->getRelativeFilePathFromCwd();
            $this->symfonyStyle->writeln(' * ' . $filename);
        }
        $message = \sprintf('%d loaded sets', \count($sets));
        $this->symfonyStyle->success($message);
    }
}
