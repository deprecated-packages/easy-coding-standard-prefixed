<?php

namespace _PhpScoper66292c14b658;

use _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper66292c14b658\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
