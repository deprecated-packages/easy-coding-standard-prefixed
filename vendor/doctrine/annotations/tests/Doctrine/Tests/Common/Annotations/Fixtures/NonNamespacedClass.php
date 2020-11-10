<?php

namespace _PhpScopere5e7dca8c031;

use _PhpScopere5e7dca8c031\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopere5e7dca8c031\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopere5e7dca8c031\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
