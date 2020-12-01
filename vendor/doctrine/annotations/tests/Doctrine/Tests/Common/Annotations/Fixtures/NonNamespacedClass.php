<?php

namespace _PhpScoper4972b76c81a2;

use _PhpScoper4972b76c81a2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4972b76c81a2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4972b76c81a2\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
