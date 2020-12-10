<?php

namespace _PhpScoper21c6ce8bfe5d;

use _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper21c6ce8bfe5d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
