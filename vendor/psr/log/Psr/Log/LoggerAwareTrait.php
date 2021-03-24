<?php

namespace _PhpScoper45e499ef5890\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper45e499ef5890\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
