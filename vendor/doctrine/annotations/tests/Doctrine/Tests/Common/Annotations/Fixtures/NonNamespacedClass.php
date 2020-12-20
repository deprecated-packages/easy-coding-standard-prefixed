<?php

namespace _PhpScoperba24099fc6fd;

use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperba24099fc6fd\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
