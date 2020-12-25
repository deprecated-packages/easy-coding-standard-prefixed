<?php

/*
 * This file is part of composer/xdebug-handler.
 *
 * (c) Composer <https://github.com/composer>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */
namespace _PhpScoper64ca614e27fd\Composer\XdebugHandler;

/**
 * @author John Stevenson <john-stevenson@blueyonder.co.uk>
 */
class PhpConfig
{
    /**
     * Use the original PHP configuration
     *
     * @return array PHP cli options
     */
    public function useOriginal()
    {
        $this->getDataAndReset();
        return array();
    }
    /**
     * Use standard restart settings
     *
     * @return array PHP cli options
     */
    public function useStandard()
    {
        if ($data = $this->getDataAndReset()) {
            return array('-n', '-c', $data['tmpIni']);
        }
        return array();
    }
    /**
     * Use environment variables to persist settings
     *
     * @return array PHP cli options
     */
    public function usePersistent()
    {
        if ($data = $this->getDataAndReset()) {
            \_PhpScoper64ca614e27fd\Composer\XdebugHandler\Process::setEnv('PHPRC', $data['tmpIni']);
            \_PhpScoper64ca614e27fd\Composer\XdebugHandler\Process::setEnv('PHP_INI_SCAN_DIR', '');
        }
        return array();
    }
    /**
     * Returns restart data if available and resets the environment
     *
     * @return array|null
     */
    private function getDataAndReset()
    {
        if ($data = \_PhpScoper64ca614e27fd\Composer\XdebugHandler\XdebugHandler::getRestartSettings()) {
            \_PhpScoper64ca614e27fd\Composer\XdebugHandler\Process::setEnv('PHPRC', $data['phprc']);
            \_PhpScoper64ca614e27fd\Composer\XdebugHandler\Process::setEnv('PHP_INI_SCAN_DIR', $data['scanDir']);
        }
        return $data;
    }
}
