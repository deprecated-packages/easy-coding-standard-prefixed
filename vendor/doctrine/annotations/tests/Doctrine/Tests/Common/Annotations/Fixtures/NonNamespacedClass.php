<?php

namespace _PhpScoper5465fda93cc7;

use _PhpScoper5465fda93cc7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5465fda93cc7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5465fda93cc7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
