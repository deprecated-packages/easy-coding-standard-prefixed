<?php

namespace _PhpScoper8db4616aa69d\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoper8db4616aa69d\Psr\Log\LoggerInterface $logger);
}
