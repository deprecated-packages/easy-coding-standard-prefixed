<?php

namespace _PhpScoper167729fa1dde;

use _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper167729fa1dde\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
