<?php

namespace _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations;

use ReflectionClass;
use _PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser;
require_once __DIR__ . '/Fixtures/NonNamespacedClass.php';
require_once __DIR__ . '/Fixtures/GlobalNamespacesPerFileWithClassAsFirst.php';
require_once __DIR__ . '/Fixtures/GlobalNamespacesPerFileWithClassAsLast.php';
class PhpParserTest extends \_PhpScoper59ccd3f8e121\PHPUnit_Framework_TestCase
{
    public function testParseClassWithMultipleClassesInFile()
    {
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\MultipleClassesInFile');
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $this->assertEquals(array('route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure'), $parser->parseClass($class));
    }
    public function testParseClassWithMultipleImportsInUseStatement()
    {
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\MultipleImportsInUseStatement');
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $this->assertEquals(array('route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure'), $parser->parseClass($class));
    }
    public function testParseClassWhenNotUserDefined()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $this->assertEquals(array(), $parser->parseClass(new \ReflectionClass('\\stdClass')));
    }
    public function testClassFileDoesNotExist()
    {
        $class = $this->getMockBuilder('\\ReflectionClass')->disableOriginalConstructor()->getMock();
        $class->expects($this->once())->method('getFilename')->will($this->returnValue('/valid/class/Fake.php(35) : eval()d code'));
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $this->assertEquals(array(), $parser->parseClass($class));
    }
    public function testParseClassWhenClassIsNotNamespaced()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass('\\AnnotationsTestsFixturesNonNamespacedClass');
        $this->assertEquals(array('route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testParseClassWhenClassIsInterface()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\TestInterface');
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure'), $parser->parseClass($class));
    }
    public function testClassWithFullyQualifiedUseStatements()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\ClassWithFullyQualifiedUseStatements');
        $this->assertEquals(array('secure' => '\\' . __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure', 'route' => '\\' . __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => '\\' . __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testNamespaceAndClassCommentedOut()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\NamespaceAndClassCommentedOut');
        $this->assertEquals(array('route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testEqualNamespacesPerFileWithClassAsFirst()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\EqualNamespacesPerFileWithClassAsFirst');
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure', 'route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route'), $parser->parseClass($class));
    }
    public function testEqualNamespacesPerFileWithClassAsLast()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\EqualNamespacesPerFileWithClassAsLast');
        $this->assertEquals(array('route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testDifferentNamespacesPerFileWithClassAsFirst()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\DifferentNamespacesPerFileWithClassAsFirst');
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure'), $parser->parseClass($class));
    }
    public function testDifferentNamespacesPerFileWithClassAsLast()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\DifferentNamespacesPerFileWithClassAsLast');
        $this->assertEquals(array('template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testGlobalNamespacesPerFileWithClassAsFirst()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass('\\GlobalNamespacesPerFileWithClassAsFirst');
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure', 'route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route'), $parser->parseClass($class));
    }
    public function testGlobalNamespacesPerFileWithClassAsLast()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass('\\GlobalNamespacesPerFileWithClassAsLast');
        $this->assertEquals(array('route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testNamespaceWithClosureDeclaration()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\NamespaceWithClosureDeclaration');
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure', 'route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    public function testIfPointerResetsOnMultipleParsingTries()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\NamespaceWithClosureDeclaration');
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure', 'route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
        $this->assertEquals(array('secure' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Secure', 'route' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Route', 'template' => __NAMESPACE__ . '\\Fixtures\\Annotation\\Template'), $parser->parseClass($class));
    }
    /**
     * @group DCOM-97
     * @group regression
     */
    public function testClassWithClosure()
    {
        $parser = new \_PhpScoper59ccd3f8e121\Doctrine\Common\Annotations\PhpParser();
        $class = new \ReflectionClass(__NAMESPACE__ . '\\Fixtures\\ClassWithClosure');
        $this->assertEquals(array('annotationtargetall' => __NAMESPACE__ . '\\Fixtures\\AnnotationTargetAll', 'annotationtargetannotation' => __NAMESPACE__ . '\\Fixtures\\AnnotationTargetAnnotation'), $parser->parseClass($class));
    }
}
