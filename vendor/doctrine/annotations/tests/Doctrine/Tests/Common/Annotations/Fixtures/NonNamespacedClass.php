<?php

namespace _PhpScoper2a48669dad72;

use _PhpScoper2a48669dad72\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2a48669dad72\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2a48669dad72\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
