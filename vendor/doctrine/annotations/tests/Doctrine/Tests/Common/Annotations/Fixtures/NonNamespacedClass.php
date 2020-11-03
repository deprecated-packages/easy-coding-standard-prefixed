<?php

namespace _PhpScoper3d04c8135695;

use _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3d04c8135695\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
