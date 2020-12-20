<?php

namespace _PhpScoper967d20dce97a;

use _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper967d20dce97a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
