<?php

namespace _PhpScoperd2a667bd5a98\Psr\Log;

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
    public function setLogger(\_PhpScoperd2a667bd5a98\Psr\Log\LoggerInterface $logger);
}
