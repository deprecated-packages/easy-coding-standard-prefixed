<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Parser;

use _PhpScoper229e8121cf9f\PhpParser\Error;
use _PhpScoper229e8121cf9f\PhpParser\ErrorHandler;
use _PhpScoper229e8121cf9f\PhpParser\Parser;
class Multiple implements \_PhpScoper229e8121cf9f\PhpParser\Parser
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
    public function parse(string $code, \_PhpScoper229e8121cf9f\PhpParser\ErrorHandler $errorHandler = null)
    {
        if (null === $errorHandler) {
            $errorHandler = new \_PhpScoper229e8121cf9f\PhpParser\ErrorHandler\Throwing();
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
    private function tryParse(\_PhpScoper229e8121cf9f\PhpParser\Parser $parser, \_PhpScoper229e8121cf9f\PhpParser\ErrorHandler $errorHandler, $code)
    {
        $stmts = null;
        $error = null;
        try {
            $stmts = $parser->parse($code, $errorHandler);
        } catch (\_PhpScoper229e8121cf9f\PhpParser\Error $error) {
        }
        return [$stmts, $error];
    }
}
