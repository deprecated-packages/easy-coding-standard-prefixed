<?php

namespace _PhpScoper4848279dba07;

use _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4848279dba07\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
