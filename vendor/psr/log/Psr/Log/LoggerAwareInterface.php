<?php

namespace _PhpScoper1ddca3f92d7d\Psr\Log;

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
    public function setLogger(\_PhpScoper1ddca3f92d7d\Psr\Log\LoggerInterface $logger);
}
