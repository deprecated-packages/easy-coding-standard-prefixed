<?php

namespace _PhpScoperae959d396e95;

use _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperae959d396e95\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
