<?php

namespace _PhpScoper1103e00fb46b\Psr\Log;

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
    public function setLogger(\_PhpScoper1103e00fb46b\Psr\Log\LoggerInterface $logger);
}
