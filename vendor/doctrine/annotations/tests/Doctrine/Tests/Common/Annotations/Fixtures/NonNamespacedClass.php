<?php

namespace _PhpScoper7312d63d356f;

use _PhpScoper7312d63d356f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7312d63d356f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7312d63d356f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
