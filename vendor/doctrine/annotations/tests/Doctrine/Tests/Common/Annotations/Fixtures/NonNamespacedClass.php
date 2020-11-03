<?php

namespace _PhpScoper2b44cb0c30af;

use _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2b44cb0c30af\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
