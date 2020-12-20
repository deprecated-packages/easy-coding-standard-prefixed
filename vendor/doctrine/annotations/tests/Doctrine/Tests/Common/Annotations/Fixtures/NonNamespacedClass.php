<?php

namespace _PhpScoper611f49771945;

use _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper611f49771945\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
