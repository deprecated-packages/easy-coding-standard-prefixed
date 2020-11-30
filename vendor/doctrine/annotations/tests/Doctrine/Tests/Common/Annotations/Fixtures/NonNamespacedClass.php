<?php

namespace _PhpScoper2637e9a72c68;

use _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper2637e9a72c68\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
