<?php

declare (strict_types=1);
namespace Symplify\Skipper\ValueObjectFactory;

use _PhpScoperb383f16e851e\Nette\Utils\Strings;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\Skipper\ValueObject\Option;
use Symplify\Skipper\ValueObject\SkipRules;
final class SkipRulesFactory
{
    /**
     * @var string[]
     */
    private $skippedClasses = [];
    /**
     * @var string[]
     */
    private $skippedCodes = [];
    /**
     * @var array<string, string[]|null>
     */
    private $skippedMessages = [];
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    public function __construct(\Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider)
    {
        $this->parameterProvider = $parameterProvider;
    }
    public function create() : \Symplify\Skipper\ValueObject\SkipRules
    {
        $skip = $this->parameterProvider->provideArrayParameter(\Symplify\Skipper\ValueObject\Option::SKIP);
        $this->skippedClasses = [];
        $this->skippedCodes = [];
        $this->skippedMessages = [];
        foreach ($skip as $key => $value) {
            if (\is_int($key)) {
                $this->separateSkipItem($value, null);
                continue;
            }
            $this->separateSkipItem($key, $value);
        }
        return new \Symplify\Skipper\ValueObject\SkipRules($this->skippedClasses, $this->skippedCodes, $this->skippedMessages);
    }
    private function separateSkipItem($key, $value) : void
    {
        if (\class_exists($key)) {
            $this->skippedClasses[$key] = $value;
            return;
        }
        if (\class_exists((string) \_PhpScoperb383f16e851e\Nette\Utils\Strings::before($key, '.'))) {
            $this->skippedCodes[$key] = $value;
            return;
        }
        $this->skippedMessages[$key] = $value;
    }
}