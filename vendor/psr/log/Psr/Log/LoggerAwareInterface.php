<?php

namespace _PhpScoperd47a2fa2a77e\Psr\Log;

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
    public function setLogger(\_PhpScoperd47a2fa2a77e\Psr\Log\LoggerInterface $logger);
}
