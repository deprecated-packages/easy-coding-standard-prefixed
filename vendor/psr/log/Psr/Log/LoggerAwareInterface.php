<?php

namespace _PhpScoper971ef29294dd\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper971ef29294dd\Psr\Log\LoggerInterface $logger);
}
