<?php

namespace _PhpScoperb383f16e851e;

use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb383f16e851e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
