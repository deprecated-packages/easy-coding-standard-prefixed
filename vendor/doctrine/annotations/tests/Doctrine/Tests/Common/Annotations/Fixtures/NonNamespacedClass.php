<?php

namespace _PhpScoper83a475a0590e;

use _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper83a475a0590e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
