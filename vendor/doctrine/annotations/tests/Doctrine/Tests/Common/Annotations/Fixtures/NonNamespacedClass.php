<?php

namespace _PhpScoper6224e3b16fcc;

use _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6224e3b16fcc\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
