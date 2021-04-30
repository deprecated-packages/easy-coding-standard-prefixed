<?php

namespace _PhpScopera658fe86acec\Psr\Log;

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
    public function setLogger(\_PhpScopera658fe86acec\Psr\Log\LoggerInterface $logger);
}
