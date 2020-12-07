<?php

namespace _PhpScoper18bd934c069f;

use _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper18bd934c069f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
