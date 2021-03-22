<?php

namespace _PhpScoper82aa0193482e\Psr\Log;

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
    public function setLogger(\_PhpScoper82aa0193482e\Psr\Log\LoggerInterface $logger);
}
