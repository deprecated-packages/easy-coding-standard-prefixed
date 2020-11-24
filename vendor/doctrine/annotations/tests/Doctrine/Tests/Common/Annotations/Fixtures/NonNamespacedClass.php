<?php

namespace _PhpScoperfd70a7e8e84f;

use _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfd70a7e8e84f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
