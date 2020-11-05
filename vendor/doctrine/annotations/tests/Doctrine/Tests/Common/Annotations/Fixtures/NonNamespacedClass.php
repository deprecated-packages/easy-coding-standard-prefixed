<?php

namespace _PhpScoper39d23eef9a06;

use _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper39d23eef9a06\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
