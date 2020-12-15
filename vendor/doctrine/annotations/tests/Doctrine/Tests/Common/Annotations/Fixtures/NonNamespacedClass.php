<?php

namespace _PhpScoper80dbed43490f;

use _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper80dbed43490f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
