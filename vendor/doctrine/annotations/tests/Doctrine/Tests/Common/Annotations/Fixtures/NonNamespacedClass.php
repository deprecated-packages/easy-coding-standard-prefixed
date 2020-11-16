<?php

namespace _PhpScoper8e2d8a2760d1;

use _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8e2d8a2760d1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
