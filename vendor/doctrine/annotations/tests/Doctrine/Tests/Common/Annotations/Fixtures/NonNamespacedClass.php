<?php

namespace _PhpScoperb26833cc184d;

use _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb26833cc184d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
