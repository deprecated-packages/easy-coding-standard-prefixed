<?php

namespace _PhpScoper7c1f54fd2f3a;

use _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7c1f54fd2f3a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
