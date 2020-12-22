<?php

namespace _PhpScoper57272265e1c9;

use _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper57272265e1c9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
