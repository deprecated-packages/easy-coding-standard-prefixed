<?php

namespace _PhpScoperc7c7dddc9238;

use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc7c7dddc9238\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
