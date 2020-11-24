<?php

namespace _PhpScoperf3d5f0921050;

use _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf3d5f0921050\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
