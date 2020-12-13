<?php

namespace _PhpScoper78af57a363a0;

use _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper78af57a363a0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
