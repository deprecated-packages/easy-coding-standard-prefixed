<?php

namespace _PhpScoper6dbb854503f8;

use _PhpScoper6dbb854503f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6dbb854503f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6dbb854503f8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
