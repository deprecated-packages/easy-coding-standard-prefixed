<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Reporter;

use _PhpScoperf53473b45c36\Symfony\Component\Console\Style\SymfonyStyle;
final class SnippetReporter
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct(\_PhpScoperf53473b45c36\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        $this->symfonyStyle = $symfonyStyle;
    }
    /**
     * @param string[] $sources
     */
    public function reportNoFilesFound(array $sources) : void
    {
        $message = \sprintf('No files found in "%s" paths.%sCheck CLI arguments or "Option::PATHS" parameter in "ecs.php" config file', \implode('", ', $sources), \PHP_EOL);
        $this->symfonyStyle->warning($message);
    }
}
