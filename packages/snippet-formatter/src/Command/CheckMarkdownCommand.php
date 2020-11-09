<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Command;

use _PhpScoperf5f75c22067b\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperf5f75c22067b\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern;
final class CheckMarkdownCommand extends \Symplify\EasyCodingStandard\SnippetFormatter\Command\AbstractSnippetFormatterCommand
{
    protected function configure() : void
    {
        $this->setDescription('Format Markdown PHP code');
        parent::configure();
    }
    protected function execute(\_PhpScoperf5f75c22067b\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperf5f75c22067b\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doExecuteSnippetFormatterWithFileNamesAndSnippetPattern($input, '*.md', \Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern::MARKDOWN_PHP_SNIPPET_REGEX);
    }
}
