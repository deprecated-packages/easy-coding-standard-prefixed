<?php

namespace _PhpScoper2a8ad010dfbd;

use _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2a8ad010dfbd\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
