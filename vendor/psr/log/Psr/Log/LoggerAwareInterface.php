<?php

namespace _PhpScoperc75fd40d7a6e\Psr\Log;

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
    public function setLogger(\_PhpScoperc75fd40d7a6e\Psr\Log\LoggerInterface $logger);
}
