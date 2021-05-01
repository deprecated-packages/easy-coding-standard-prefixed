<?php

namespace _PhpScoper3c44535fe75f\Psr\Log;

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
    public function setLogger(\_PhpScoper3c44535fe75f\Psr\Log\LoggerInterface $logger);
}
