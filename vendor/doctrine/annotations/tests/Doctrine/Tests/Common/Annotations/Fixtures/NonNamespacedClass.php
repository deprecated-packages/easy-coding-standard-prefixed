<?php

namespace _PhpScoper8a0112f19f39;

use _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8a0112f19f39\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
