<?php

namespace _PhpScoper3e1e0e5bb8ef;

use _PhpScoper3e1e0e5bb8ef\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3e1e0e5bb8ef\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3e1e0e5bb8ef\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
