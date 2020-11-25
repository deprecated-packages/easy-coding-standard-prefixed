<?php

namespace _PhpScoper13133e188f67;

use _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper13133e188f67\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
