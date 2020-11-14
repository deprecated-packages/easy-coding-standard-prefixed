<?php

namespace _PhpScoperecb978830f1e;

use _PhpScoperecb978830f1e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperecb978830f1e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperecb978830f1e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
