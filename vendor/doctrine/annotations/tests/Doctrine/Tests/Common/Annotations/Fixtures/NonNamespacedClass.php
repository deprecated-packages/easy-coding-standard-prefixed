<?php

namespace _PhpScoper16399a42e87c;

use _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper16399a42e87c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
