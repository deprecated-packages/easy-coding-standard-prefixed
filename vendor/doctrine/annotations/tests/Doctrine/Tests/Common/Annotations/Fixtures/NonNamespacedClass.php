<?php

namespace _PhpScoper2f75f00bf6fa;

use _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2f75f00bf6fa\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
