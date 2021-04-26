<?php

namespace _PhpScoper4c15c250a340\Psr\Log;

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
    public function setLogger(\_PhpScoper4c15c250a340\Psr\Log\LoggerInterface $logger);
}
