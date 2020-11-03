<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Error;

use Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult;
final class ErrorAndDiffResultFactory
{
    public function create(\Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector $errorAndDiffCollector) : \Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult
    {
        return new \Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult($errorAndDiffCollector->getErrors(), $errorAndDiffCollector->getFileDiffs(), $errorAndDiffCollector->getSystemErrors());
    }
}
