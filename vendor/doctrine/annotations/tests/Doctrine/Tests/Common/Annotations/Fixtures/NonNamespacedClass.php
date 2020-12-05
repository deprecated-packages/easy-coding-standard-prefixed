<?php

namespace _PhpScoper56c9df53a081;

use _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper56c9df53a081\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
