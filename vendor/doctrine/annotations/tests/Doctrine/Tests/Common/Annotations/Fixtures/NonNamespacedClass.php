<?php

namespace _PhpScoper9e3283ae8193;

use _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9e3283ae8193\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
