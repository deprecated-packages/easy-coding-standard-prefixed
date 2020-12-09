<?php

namespace _PhpScoper7f5523334c1b;

use _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7f5523334c1b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
