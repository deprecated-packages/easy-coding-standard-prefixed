<?php

namespace _PhpScopere341acab57d4;

use _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopere341acab57d4\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
