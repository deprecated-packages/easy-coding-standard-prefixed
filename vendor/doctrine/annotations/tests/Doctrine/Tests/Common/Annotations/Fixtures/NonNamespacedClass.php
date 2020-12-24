<?php

namespace _PhpScoper629192f0909b;

use _PhpScoper629192f0909b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper629192f0909b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper629192f0909b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
