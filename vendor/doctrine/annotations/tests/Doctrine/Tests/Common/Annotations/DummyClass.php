<?php

namespace _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations;

use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\DummyAnnotation;
use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Name;
use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\DummyJoinTable;
use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\DummyJoinColumn;
/**
 * A description of this class.
 *
 * Let's see if the parser recognizes that this @ is not really referring to an
 * annotation. Also make sure that @var \ is not concated to "@var\is".
 *
 * @author robo
 * @since 2.0
 * @DummyAnnotation(dummyValue="hello")
 */
class DummyClass
{
    /**
     * A nice property.
     *
     * @var mixed
     * @DummyAnnotation(dummyValue="fieldHello")
     */
    private $field1;
    /**
     * @DummyJoinTable(name="join_table",
     *      joinColumns={@DummyJoinColumn(name="col1", referencedColumnName="col2")},
     *      inverseJoinColumns={
     *          @DummyJoinColumn(name="col3", referencedColumnName="col4")
     *      })
     */
    private $field2;
    /**
     * Gets the value of field1.
     *
     * @return mixed
     * @DummyAnnotation({1,2,"three"})
     */
    public function getField1()
    {
    }
}