<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Command;

use _PhpScoper86aebf8cf357\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper86aebf8cf357\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Console\Command\AbstractCheckCommand;
use Symplify\EasyCodingStandard\SnippetFormatter\Application\SnippetFormatterApplication;
use Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern;
final class CheckMarkdownCommand extends \Symplify\EasyCodingStandard\Console\Command\AbstractCheckCommand
{
    /**
     * @var SnippetFormatterApplication
     */
    private $snippetFormatterApplication;
    public function __construct(\Symplify\EasyCodingStandard\SnippetFormatter\Application\SnippetFormatterApplication $snippetFormatterApplication)
    {
        $this->snippetFormatterApplication = $snippetFormatterApplication;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->setDescription('Format Markdown PHP code');
        parent::configure();
    }
    protected function execute(\_PhpScoper86aebf8cf357\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper86aebf8cf357\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->configuration->resolveFromInput($input);
        $sources = $this->configuration->getSources();
        $phpFileInfos = $this->smartFinder->find($sources, '*.php', ['Fixture']);
        return $this->snippetFormatterApplication->processFileInfosWithSnippetPattern($this->configuration, $phpFileInfos, \Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern::MARKDOWN_PHP_SNIPPET_REGEX, 'markdown');
    }
}
