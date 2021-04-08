<?php

namespace _PhpScopera909b9d9be2e\Psr\Log;

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
    public function setLogger(\_PhpScopera909b9d9be2e\Psr\Log\LoggerInterface $logger);
}
