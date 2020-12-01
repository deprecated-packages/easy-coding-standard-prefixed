<?php

namespace _PhpScoper9613f3fac51d;

use _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9613f3fac51d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
