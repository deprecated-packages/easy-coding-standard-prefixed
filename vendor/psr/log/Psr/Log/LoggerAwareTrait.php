<?php

namespace _PhpScoperd3d57724c802\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoperd3d57724c802\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
