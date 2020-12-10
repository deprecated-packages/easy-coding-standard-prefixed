<?php

namespace _PhpScoper17bb67c99ade\Psr\Log;

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
    public function setLogger(\_PhpScoper17bb67c99ade\Psr\Log\LoggerInterface $logger);
}
