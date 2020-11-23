<?php

namespace _PhpScoper7b8580219c59;

use _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7b8580219c59\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
