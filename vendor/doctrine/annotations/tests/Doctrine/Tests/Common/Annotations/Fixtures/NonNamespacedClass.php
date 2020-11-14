<?php

namespace _PhpScoper229e8121cf9f;

use _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper229e8121cf9f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
