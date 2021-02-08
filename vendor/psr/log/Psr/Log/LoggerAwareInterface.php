<?php

namespace _PhpScoper326af2119eba\Psr\Log;

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
    public function setLogger(\_PhpScoper326af2119eba\Psr\Log\LoggerInterface $logger);
}
