<?php

namespace _PhpScoper5ca2d8bcb02c;

use _PhpScoper5ca2d8bcb02c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5ca2d8bcb02c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5ca2d8bcb02c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
