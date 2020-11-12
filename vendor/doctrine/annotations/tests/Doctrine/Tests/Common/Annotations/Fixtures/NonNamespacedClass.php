<?php

namespace _PhpScoper3d6b50c3ca2f;

use _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3d6b50c3ca2f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
