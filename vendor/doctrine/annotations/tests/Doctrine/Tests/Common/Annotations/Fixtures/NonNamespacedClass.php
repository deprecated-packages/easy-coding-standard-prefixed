<?php

namespace _PhpScoper4d05106cc3c0;

use _PhpScoper4d05106cc3c0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4d05106cc3c0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4d05106cc3c0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
