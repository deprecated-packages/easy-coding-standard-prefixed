<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\Parser;

use _PhpScoperc83f84c90b60\PhpParser\Error;
use _PhpScoperc83f84c90b60\PhpParser\ErrorHandler;
use _PhpScoperc83f84c90b60\PhpParser\Parser;
class Multiple implements \_PhpScoperc83f84c90b60\PhpParser\Parser
{
    /** @var Parser[] List of parsers to try, in order of preference */
    private $parsers;
    /**
     * Create a parser which will try multiple parsers in an order of preference.
     *
     * Parsers will be invoked in the order they're provided to the constructor. If one of the
     * parsers runs without throwing, it's output is returned. Otherwise the exception that the
     * first parser generated is thrown.
     *
     * @param Parser[] $parsers
     */
    public function __construct(array $parsers)
    {
        $this->parsers = $parsers;
    }
    public function parse(string $code, \_PhpScoperc83f84c90b60\PhpParser\ErrorHandler $errorHandler = null)
    {
        if (null === $errorHandler) {
            $errorHandler = new \_PhpScoperc83f84c90b60\PhpParser\ErrorHandler\Throwing();
        }
        list($firstStmts, $firstError) = $this->tryParse($this->parsers[0], $errorHandler, $code);
        if ($firstError === null) {
            return $firstStmts;
        }
        for ($i = 1, $c = \count($this->parsers); $i < $c; ++$i) {
            list($stmts, $error) = $this->tryParse($this->parsers[$i], $errorHandler, $code);
            if ($error === null) {
                return $stmts;
            }
        }
        throw $firstError;
    }
    private function tryParse(\_PhpScoperc83f84c90b60\PhpParser\Parser $parser, \_PhpScoperc83f84c90b60\PhpParser\ErrorHandler $errorHandler, $code)
    {
        $stmts = null;
        $error = null;
        try {
            $stmts = $parser->parse($code, $errorHandler);
        } catch (\_PhpScoperc83f84c90b60\PhpParser\Error $error) {
        }
        return [$stmts, $error];
    }
}
