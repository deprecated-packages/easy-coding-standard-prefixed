<?php

namespace _PhpScoper81b3ff5ab9fe;

class RandomBytesTest extends \_PhpScoper81b3ff5ab9fe\PHPUnit_Framework_TestCase
{
    public function testFuncExists()
    {
        $this->assertTrue(\function_exists('random_bytes'));
    }
    public function testOutput()
    {
        $bytes = array(\random_bytes(12), \random_bytes(64), \random_bytes(64));
        $this->assertTrue(\strlen(\bin2hex($bytes[0])) === 24);
        // This should never generate identical byte strings
        $this->assertFalse($bytes[1] === $bytes[2]);
    }
}
\class_alias('_PhpScoper81b3ff5ab9fe\\RandomBytesTest', 'RandomBytesTest', \false);
