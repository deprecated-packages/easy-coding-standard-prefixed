<?php

namespace _PhpScoper666af036e800;

use _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper666af036e800\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
