<?php

namespace _PhpScoper967c4b7e296e;

use _PhpScoper967c4b7e296e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper967c4b7e296e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper967c4b7e296e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
