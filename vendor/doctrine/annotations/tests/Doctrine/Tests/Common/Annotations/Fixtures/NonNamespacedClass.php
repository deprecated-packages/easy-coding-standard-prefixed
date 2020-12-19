<?php

namespace _PhpScoper065e4ba46e6d;

use _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper065e4ba46e6d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
