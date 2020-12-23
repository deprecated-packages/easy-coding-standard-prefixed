<?php

namespace _PhpScoper14cb6de5473d;

use _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper14cb6de5473d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
