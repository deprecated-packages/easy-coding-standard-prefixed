<?php

namespace _PhpScoper246d7c16d32f;

use _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper246d7c16d32f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
