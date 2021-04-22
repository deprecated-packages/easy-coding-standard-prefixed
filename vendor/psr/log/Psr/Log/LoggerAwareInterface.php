<?php

namespace _PhpScoper9907e2e69ce3\Psr\Log;

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
    public function setLogger(\_PhpScoper9907e2e69ce3\Psr\Log\LoggerInterface $logger);
}
