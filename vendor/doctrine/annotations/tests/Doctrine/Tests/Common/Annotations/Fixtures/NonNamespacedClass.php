<?php

namespace _PhpScoper6d28bdf6a7f9;

use _PhpScoper6d28bdf6a7f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6d28bdf6a7f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6d28bdf6a7f9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
