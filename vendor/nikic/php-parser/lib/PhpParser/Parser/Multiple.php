<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Parser;

use _PhpScoper3e8786a75afe\PhpParser\Error;
use _PhpScoper3e8786a75afe\PhpParser\ErrorHandler;
use _PhpScoper3e8786a75afe\PhpParser\Parser;
class Multiple implements \_PhpScoper3e8786a75afe\PhpParser\Parser
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
    public function parse(string $code, \_PhpScoper3e8786a75afe\PhpParser\ErrorHandler $errorHandler = null)
    {
        if (null === $errorHandler) {
            $errorHandler = new \_PhpScoper3e8786a75afe\PhpParser\ErrorHandler\Throwing();
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
    private function tryParse(\_PhpScoper3e8786a75afe\PhpParser\Parser $parser, \_PhpScoper3e8786a75afe\PhpParser\ErrorHandler $errorHandler, $code)
    {
        $stmts = null;
        $error = null;
        try {
            $stmts = $parser->parse($code, $errorHandler);
        } catch (\_PhpScoper3e8786a75afe\PhpParser\Error $error) {
        }
        return [$stmts, $error];
    }
}
