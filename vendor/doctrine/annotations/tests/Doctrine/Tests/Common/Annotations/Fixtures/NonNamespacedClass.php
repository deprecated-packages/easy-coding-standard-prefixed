<?php

namespace _PhpScoper5813f9b171f8;

use _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5813f9b171f8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
