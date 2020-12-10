<?php

namespace _PhpScoper6250f8d25076;

use _PhpScoper6250f8d25076\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6250f8d25076\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6250f8d25076\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
