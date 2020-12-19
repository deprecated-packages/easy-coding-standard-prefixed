<?php

namespace _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations;

use _PhpScoperd1a5bf00e83e\Doctrine\Common\Annotations\AnnotationReader;
use _PhpScoperd1a5bf00e83e\Doctrine\Common\Annotations\FileCacheReader;
class FileCacheReaderTest extends \_PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\AbstractReaderTest
{
    private $cacheDir;
    protected function getReader()
    {
        $this->cacheDir = \sys_get_temp_dir() . "/annotations_" . \uniqid();
        @\mkdir($this->cacheDir);
        return new \_PhpScoperd1a5bf00e83e\Doctrine\Common\Annotations\FileCacheReader(new \_PhpScoperd1a5bf00e83e\Doctrine\Common\Annotations\AnnotationReader(), $this->cacheDir);
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
        new \_PhpScoperd1a5bf00e83e\Doctrine\Common\Annotations\FileCacheReader(new \_PhpScoperd1a5bf00e83e\Doctrine\Common\Annotations\AnnotationReader(), $this->cacheDir);
        $this->assertTrue(\is_dir($this->cacheDir));
    }
}
