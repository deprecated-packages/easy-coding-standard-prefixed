<?php

namespace _PhpScoper6c2f17c43d2d;

use _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6c2f17c43d2d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
