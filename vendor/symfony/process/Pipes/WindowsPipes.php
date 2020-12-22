<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper57272265e1c9\Symfony\Component\Process\Pipes;

use _PhpScoper57272265e1c9\Symfony\Component\Process\Process;
use _PhpScoper57272265e1c9\Symfony\Component\Process\Exception\RuntimeException;
/**
 * WindowsPipes implementation uses temporary files as handles.
 *
 * @see https://bugs.php.net/bug.php?id=51800
 * @see https://bugs.php.net/bug.php?id=65650
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class WindowsPipes extends \_PhpScoper57272265e1c9\Symfony\Component\Process\Pipes\AbstractPipes
{
    /** @var array */
    private $files = array();
    /** @var array */
    private $fileHandles = array();
    /** @var array */
    private $readBytes = array(\_PhpScoper57272265e1c9\Symfony\Component\Process\Process::STDOUT => 0, \_PhpScoper57272265e1c9\Symfony\Component\Process\Process::STDERR => 0);
    /** @var bool */
    private $haveReadSupport;
    public function __construct($input, $haveReadSupport)
    {
        $this->haveReadSupport = (bool) $haveReadSupport;
        if ($this->haveReadSupport) {
            // Fix for PHP bug #51800: reading from STDOUT pipe hangs forever on Windows if the output is too big.
            // Workaround for this problem is to use temporary files instead of pipes on Windows platform.
            //
            // @see https://bugs.php.net/bug.php?id=51800
            $pipes = array(\_PhpScoper57272265e1c9\Symfony\Component\Process\Process::STDOUT => \_PhpScoper57272265e1c9\Symfony\Component\Process\Process::OUT, \_PhpScoper57272265e1c9\Symfony\Component\Process\Process::STDERR => \_PhpScoper57272265e1c9\Symfony\Component\Process\Process::ERR);
            $tmpCheck = \false;
            $tmpDir = \sys_get_temp_dir();
            $lastError = 'unknown reason';
            \set_error_handler(function ($type, $msg) use(&$lastError) {
                $lastError = $msg;
            });
            for ($i = 0;; ++$i) {
                foreach ($pipes as $pipe => $name) {
                    $file = \sprintf('%s\\sf_proc_%02X.%s', $tmpDir, $i, $name);
                    if (\file_exists($file) && !\unlink($file)) {
                        continue 2;
                    }
                    $h = \fopen($file, 'xb');
                    if (!$h) {
                        $error = $lastError;
                        if ($tmpCheck || ($tmpCheck = \unlink(\tempnam(\false, 'sf_check_')))) {
                            continue;
                        }
                        \restore_error_handler();
                        throw new \_PhpScoper57272265e1c9\Symfony\Component\Process\Exception\RuntimeException(\sprintf('A temporary file could not be opened to write the process output: %s', $error));
                    }
                    if (!$h || !($this->fileHandles[$pipe] = \fopen($file, 'rb'))) {
                        continue 2;
                    }
                    if (isset($this->files[$pipe])) {
                        \unlink($this->files[$pipe]);
                    }
                    $this->files[$pipe] = $file;
                }
                break;
            }
            \restore_error_handler();
        }
        parent::__construct($input);
    }
    public function __destruct()
    {
        $this->close();
        $this->removeFiles();
    }
    /**
     * {@inheritdoc}
     */
    public function getDescriptors()
    {
        if (!$this->haveReadSupport) {
            $nullstream = \fopen('NUL', 'c');
            return array(array('pipe', 'r'), $nullstream, $nullstream);
        }
        // We're not using pipe on Windows platform as it hangs (https://bugs.php.net/bug.php?id=51800)
        // We're not using file handles as it can produce corrupted output https://bugs.php.net/bug.php?id=65650
        // So we redirect output within the commandline and pass the nul device to the process
        return array(array('pipe', 'r'), array('file', 'NUL', 'w'), array('file', 'NUL', 'w'));
    }
    /**
     * {@inheritdoc}
     */
    public function getFiles()
    {
        return $this->files;
    }
    /**
     * {@inheritdoc}
     */
    public function readAndWrite($blocking, $close = \false)
    {
        $this->unblock();
        $w = $this->write();
        $read = $r = $e = array();
        if ($blocking) {
            if ($w) {
                @\stream_select($r, $w, $e, 0, \_PhpScoper57272265e1c9\Symfony\Component\Process\Process::TIMEOUT_PRECISION * 1000000.0);
            } elseif ($this->fileHandles) {
                \usleep(\_PhpScoper57272265e1c9\Symfony\Component\Process\Process::TIMEOUT_PRECISION * 1000000.0);
            }
        }
        foreach ($this->fileHandles as $type => $fileHandle) {
            $data = \stream_get_contents($fileHandle, -1, $this->readBytes[$type]);
            if (isset($data[0])) {
                $this->readBytes[$type] += \strlen($data);
                $read[$type] = $data;
            }
            if ($close) {
                \fclose($fileHandle);
                unset($this->fileHandles[$type]);
            }
        }
        return $read;
    }
    /**
     * {@inheritdoc}
     */
    public function haveReadSupport()
    {
        return $this->haveReadSupport;
    }
    /**
     * {@inheritdoc}
     */
    public function areOpen()
    {
        return $this->pipes && $this->fileHandles;
    }
    /**
     * {@inheritdoc}
     */
    public function close()
    {
        parent::close();
        foreach ($this->fileHandles as $handle) {
            \fclose($handle);
        }
        $this->fileHandles = array();
    }
    /**
     * Removes temporary files.
     */
    private function removeFiles()
    {
        foreach ($this->files as $filename) {
            if (\file_exists($filename)) {
                @\unlink($filename);
            }
        }
        $this->files = array();
    }
}
