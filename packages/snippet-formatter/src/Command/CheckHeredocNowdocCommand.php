<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Command;

use _PhpScoperc7c7dddc9238\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperc7c7dddc9238\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern;
final class CheckHeredocNowdocCommand extends \Symplify\EasyCodingStandard\SnippetFormatter\Command\AbstractSnippetFormatterCommand
{
    protected function configure() : void
    {
        $this->setDescription('Format Heredoc/Nowdoc PHP snippets in PHP files');
        parent::configure();
    }
    protected function execute(\_PhpScoperc7c7dddc9238\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperc7c7dddc9238\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doExecuteSnippetFormatterWithFileNamesAndSnippetPattern($input, '*.php', \Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern::HERENOWDOC_SNIPPET_REGEX, 'heredocnowdox');
    }
}
