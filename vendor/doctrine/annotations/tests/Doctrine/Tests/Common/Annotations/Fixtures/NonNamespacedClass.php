<?php

namespace _PhpScoper49c742f5a4ee;

use _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper49c742f5a4ee\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
