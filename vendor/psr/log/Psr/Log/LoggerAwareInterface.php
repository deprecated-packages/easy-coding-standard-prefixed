<?php

namespace _PhpScopera1f11cc38772\Psr\Log;

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
    public function setLogger(\_PhpScopera1f11cc38772\Psr\Log\LoggerInterface $logger);
}
