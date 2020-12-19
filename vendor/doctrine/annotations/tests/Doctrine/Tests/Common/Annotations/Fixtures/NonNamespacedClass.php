<?php

namespace _PhpScoper269dc521b0fa;

use _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper269dc521b0fa\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
