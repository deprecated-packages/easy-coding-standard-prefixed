<?php

declare (strict_types=1);
namespace Symplify\SetConfigResolver\Bootstrap;

use _PhpScoperf65af7a6d9a0\Nette\Utils\ObjectHelpers;
use _PhpScoperf65af7a6d9a0\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\SetConfigResolver\Exception\SetNotFoundException;
final class InvalidSetReporter
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct()
    {
        $symfonyStyleFactory = new \Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory();
        $this->symfonyStyle = $symfonyStyleFactory->create();
    }
    public function report(\Symplify\SetConfigResolver\Exception\SetNotFoundException $setNotFoundException) : void
    {
        $message = $setNotFoundException->getMessage();
        $suggestedSet = \_PhpScoperf65af7a6d9a0\Nette\Utils\ObjectHelpers::getSuggestion($setNotFoundException->getAvailableSetNames(), $setNotFoundException->getSetName());
        if ($suggestedSet !== null) {
            $message .= \sprintf('. Did you mean "%s"?', $suggestedSet);
            $this->symfonyStyle->error($message);
        } elseif ($setNotFoundException->getAvailableSetNames() !== []) {
            $this->symfonyStyle->error($message);
            $this->symfonyStyle->note('Pick one of:');
            $this->symfonyStyle->listing($setNotFoundException->getAvailableSetNames());
        }
    }
}
