<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Command;

use _PhpScoper2b44cb0c30af\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper2b44cb0c30af\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
final class CheckMarkdownCommand extends \Symplify\EasyCodingStandard\SnippetFormatter\Command\AbstractSnippetFormatterCommand
{
    protected function configure() : void
    {
        $this->setName(\Symplify\PackageBuilder\Console\Command\CommandNaming::classToName(self::class));
        $this->setDescription('Format Markdown PHP code');
        parent::configure();
    }
    protected function execute(\_PhpScoper2b44cb0c30af\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper2b44cb0c30af\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doExecuteSnippetFormatterWithFileNamesAndSnippetPattern($input, '*.md', \Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern::MARKDOWN_PHP_SNIPPET_REGEX);
    }
}
