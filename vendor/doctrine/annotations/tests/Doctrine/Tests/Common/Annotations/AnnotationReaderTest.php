<?php

namespace _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations;

use _PhpScoper5ea36b274140\Doctrine\Common\Annotations\AnnotationReader;
class AnnotationReaderTest extends \_PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\AbstractReaderTest
{
    protected function getReader()
    {
        return new \_PhpScoper5ea36b274140\Doctrine\Common\Annotations\AnnotationReader();
    }
    public function testMethodAnnotationFromTrait()
    {
        if (\PHP_VERSION_ID < 50400) {
            $this->markTestSkipped('This test requires PHP 5.4 or later.');
        }
        $reader = $this->getReader();
        $ref = new \ReflectionClass('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\ClassUsesTrait');
        $annotations = $reader->getMethodAnnotations($ref->getMethod('someMethod'));
        $this->assertInstanceOf('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Bar\\Autoload', $annotations[0]);
        $annotations = $reader->getMethodAnnotations($ref->getMethod('traitMethod'));
        $this->assertInstanceOf('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\Annotation\\Autoload', $annotations[0]);
    }
    public function testMethodAnnotationFromOverwrittenTrait()
    {
        if (\PHP_VERSION_ID < 50400) {
            $this->markTestSkipped('This test requires PHP 5.4 or later.');
        }
        $reader = $this->getReader();
        $ref = new \ReflectionClass('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\ClassOverwritesTrait');
        $annotations = $reader->getMethodAnnotations($ref->getMethod('traitMethod'));
        $this->assertInstanceOf('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Bar2\\Autoload', $annotations[0]);
    }
    public function testPropertyAnnotationFromTrait()
    {
        if (\PHP_VERSION_ID < 50400) {
            $this->markTestSkipped('This test requires PHP 5.4 or later.');
        }
        $reader = $this->getReader();
        $ref = new \ReflectionClass('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\ClassUsesTrait');
        $annotations = $reader->getPropertyAnnotations($ref->getProperty('aProperty'));
        $this->assertInstanceOf('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Bar\\Autoload', $annotations[0]);
        $annotations = $reader->getPropertyAnnotations($ref->getProperty('traitProperty'));
        $this->assertInstanceOf('_PhpScoper5ea36b274140\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\Annotation\\Autoload', $annotations[0]);
    }
}
