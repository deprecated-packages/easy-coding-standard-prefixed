<?php

namespace _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations;

use _PhpScoperdf6a0b341030\Doctrine\Common\Annotations\AnnotationReader;
use _PhpScoperdf6a0b341030\Doctrine\Common\Annotations\FileCacheReader;
class FileCacheReaderTest extends \_PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\AbstractReaderTest
{
    private $cacheDir;
    protected function getReader()
    {
        $this->cacheDir = \sys_get_temp_dir() . "/annotations_" . \uniqid();
        @\mkdir($this->cacheDir);
        return new \_PhpScoperdf6a0b341030\Doctrine\Common\Annotations\FileCacheReader(new \_PhpScoperdf6a0b341030\Doctrine\Common\Annotations\AnnotationReader(), $this->cacheDir);
    }
    public function tearDown()
    {
        foreach (\glob($this->cacheDir . '/*.php') as $file) {
            \unlink($file);
        }
        \rmdir($this->cacheDir);
    }
    /**
     * @group DCOM-81
     */
    public function testAttemptToCreateAnnotationCacheDir()
    {
        $this->cacheDir = \sys_get_temp_dir() . "/not_existed_dir_" . \uniqid();
        $this->assertFalse(\is_dir($this->cacheDir));
        new \_PhpScoperdf6a0b341030\Doctrine\Common\Annotations\FileCacheReader(new \_PhpScoperdf6a0b341030\Doctrine\Common\Annotations\AnnotationReader(), $this->cacheDir);
        $this->assertTrue(\is_dir($this->cacheDir));
    }
}
