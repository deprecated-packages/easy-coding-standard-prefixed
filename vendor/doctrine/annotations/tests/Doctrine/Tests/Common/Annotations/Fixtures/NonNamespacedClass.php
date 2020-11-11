<?php

namespace _PhpScoper4f985154d5a0;

use _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4f985154d5a0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
