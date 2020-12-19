<?php

namespace _PhpScoper8b97b0dd6f5b;

use _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8b97b0dd6f5b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
