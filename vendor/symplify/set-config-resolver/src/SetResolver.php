<?php

declare (strict_types=1);
namespace Symplify\SetConfigResolver;

use Symplify\SetConfigResolver\Contract\SetProviderInterface;
use Symplify\SetConfigResolver\Exception\SetNotFoundException;
use Symplify\SetConfigResolver\ValueObject\Set;
use Symplify\SmartFileSystem\SmartFileInfo;
final class SetResolver
{
    /**
     * @var SetProviderInterface
     */
    private $setProvider;
    public function __construct(\Symplify\SetConfigResolver\Contract\SetProviderInterface $setProvider)
    {
        $this->setProvider = $setProvider;
    }
    public function detectFromName(string $setName) : \Symplify\SmartFileSystem\SmartFileInfo
    {
        $set = $this->setProvider->provideByName($setName);
        if (!$set instanceof \Symplify\SetConfigResolver\ValueObject\Set) {
            $this->reportSetNotFound($setName);
        }
        return $set->getSetFileInfo();
    }
    private function reportSetNotFound(string $setName) : void
    {
        $message = \sprintf('Set "%s" was not found', $setName);
        throw new \Symplify\SetConfigResolver\Exception\SetNotFoundException($message, $setName, $this->setProvider->provideSetNames());
    }
}
