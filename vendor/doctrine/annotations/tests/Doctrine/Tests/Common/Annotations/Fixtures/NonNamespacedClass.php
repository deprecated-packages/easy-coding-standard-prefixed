<?php

namespace _PhpScoper589e8c04a9ef;

use _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper589e8c04a9ef\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
