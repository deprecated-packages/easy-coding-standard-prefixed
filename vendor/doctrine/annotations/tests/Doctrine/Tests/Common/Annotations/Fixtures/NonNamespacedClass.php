<?php

namespace _PhpScoper528afa732cbd;

use _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper528afa732cbd\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
