<?php

namespace _PhpScoper5c006f5f032f;

use _PhpScoper5c006f5f032f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5c006f5f032f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5c006f5f032f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
