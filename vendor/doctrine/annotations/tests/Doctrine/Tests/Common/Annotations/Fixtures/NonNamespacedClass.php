<?php

namespace _PhpScoper190659c42b56;

use _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper190659c42b56\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
