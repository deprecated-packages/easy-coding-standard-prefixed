<?php

namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Ticket;

use _PhpScoper18bd934c069f\Doctrine\Common\Annotations\AnnotationReader;
use _PhpScoper18bd934c069f\Doctrine\Common\Annotations\DocParser;
use _PhpScoper18bd934c069f\Doctrine\Common\Annotations\SimpleAnnotationReader;
//Some class named Entity in the global namespace
include __DIR__ . '/DCOM58Entity.php';
/**
 * @group DCOM58
 */
class DCOM58Test extends \_PhpScoper18bd934c069f\PHPUnit_Framework_TestCase
{
    public function testIssue()
    {
        $reader = new \_PhpScoper18bd934c069f\Doctrine\Common\Annotations\AnnotationReader();
        $result = $reader->getClassAnnotations(new \ReflectionClass(__NAMESPACE__ . "\\MappedClass"));
        foreach ($result as $annot) {
            $classAnnotations[\get_class($annot)] = $annot;
        }
        $this->assertTrue(!isset($classAnnotations['']), 'Class "xxx" is not a valid entity or mapped super class.');
    }
    public function testIssueGlobalNamespace()
    {
        $docblock = "@Entity";
        $parser = new \_PhpScoper18bd934c069f\Doctrine\Common\Annotations\DocParser();
        $parser->setImports(array("__NAMESPACE__" => "_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Mapping"));
        $annots = $parser->parse($docblock);
        $this->assertEquals(1, \count($annots));
        $this->assertInstanceOf("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Mapping\\Entity", $annots[0]);
    }
    public function testIssueNamespaces()
    {
        $docblock = "@Entity";
        $parser = new \_PhpScoper18bd934c069f\Doctrine\Common\Annotations\DocParser();
        $parser->addNamespace("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM");
        $annots = $parser->parse($docblock);
        $this->assertEquals(1, \count($annots));
        $this->assertInstanceOf("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Entity", $annots[0]);
    }
    public function testIssueMultipleNamespaces()
    {
        $docblock = "@Entity";
        $parser = new \_PhpScoper18bd934c069f\Doctrine\Common\Annotations\DocParser();
        $parser->addNamespace("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Mapping");
        $parser->addNamespace("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM");
        $annots = $parser->parse($docblock);
        $this->assertEquals(1, \count($annots));
        $this->assertInstanceOf("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Mapping\\Entity", $annots[0]);
    }
    public function testIssueWithNamespacesOrImports()
    {
        $docblock = "@Entity";
        $parser = new \_PhpScoper18bd934c069f\Doctrine\Common\Annotations\DocParser();
        $annots = $parser->parse($docblock);
        $this->assertEquals(1, \count($annots));
        $this->assertInstanceOf("Entity", $annots[0]);
        $this->assertEquals(1, \count($annots));
    }
    public function testIssueSimpleAnnotationReader()
    {
        $reader = new \_PhpScoper18bd934c069f\Doctrine\Common\Annotations\SimpleAnnotationReader();
        $reader->addNamespace('_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Mapping');
        $annots = $reader->getClassAnnotations(new \ReflectionClass(__NAMESPACE__ . "\\MappedClass"));
        $this->assertEquals(1, \count($annots));
        $this->assertInstanceOf("_PhpScoper18bd934c069f\\Doctrine\\Tests\\Common\\Annotations\\Ticket\\Doctrine\\ORM\\Mapping\\Entity", $annots[0]);
    }
}
/**
 * @Entity
 */
class MappedClass
{
}
namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Ticket\Doctrine\ORM\Mapping;

/**
* @Annotation
*/
class Entity
{
}
namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Ticket\Doctrine\ORM;

/**
* @Annotation
*/
class Entity
{
}
