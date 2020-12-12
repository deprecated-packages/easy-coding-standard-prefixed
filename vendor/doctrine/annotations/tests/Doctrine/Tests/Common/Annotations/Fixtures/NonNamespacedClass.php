<?php

namespace _PhpScoper326bba7310a2;

use _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper326bba7310a2\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
