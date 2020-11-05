<?php

namespace _PhpScoper6ec31b85adcf;

use _PhpScoper6ec31b85adcf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6ec31b85adcf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6ec31b85adcf\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
