<?php

namespace _PhpScoper48b5ec5b60cf;

use _PhpScoper48b5ec5b60cf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper48b5ec5b60cf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper48b5ec5b60cf\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
