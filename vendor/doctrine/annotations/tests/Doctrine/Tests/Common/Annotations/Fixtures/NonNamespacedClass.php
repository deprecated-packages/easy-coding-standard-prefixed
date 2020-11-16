<?php

namespace _PhpScopera9d6b451df71;

use _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @Route("foo")
 * @Template
 */
class AnnotationsTestsFixturesNonNamespacedClass
{
}
/**
 * @Route("foo")
 * @Template
 */
\class_alias('_PhpScopera9d6b451df71\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
