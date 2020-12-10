<?php

namespace _PhpScoper17bb67c99ade;

use _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper17bb67c99ade\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
