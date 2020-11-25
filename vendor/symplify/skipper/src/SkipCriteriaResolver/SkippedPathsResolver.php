<?php

declare (strict_types=1);
namespace Symplify\Skipper\SkipCriteriaResolver;

use _PhpScoperaa402dd1b1f1\Nette\Utils\Strings;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\Skipper\ValueObject\Option;
final class SkippedPathsResolver
{
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    /**
     * @var string[]
     */
    private $skippedPaths = [];
    public function __construct(\Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider)
    {
        $this->parameterProvider = $parameterProvider;
    }
    /**
     * @return string[]
     */
    public function resolve() : array
    {
        $skip = $this->parameterProvider->provideArrayParameter(\Symplify\Skipper\ValueObject\Option::SKIP);
        foreach ($skip as $key => $value) {
            if (!\is_int($key)) {
                continue;
            }
            if (\file_exists($value)) {
                $this->skippedPaths[] = $value;
                continue;
            }
            if (\_PhpScoperaa402dd1b1f1\Nette\Utils\Strings::contains($value, '*')) {
                $this->skippedPaths[] = $value;
                continue;
            }
        }
        return $this->skippedPaths;
    }
}
