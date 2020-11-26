<?php

namespace _PhpScoper7c3fefba1fb9;

use _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7c3fefba1fb9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
