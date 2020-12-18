<?php

namespace _PhpScoper4d3fa30a680b;

use _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4d3fa30a680b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
