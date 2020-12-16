<?php

namespace _PhpScoperc75fd40d7a6e;

use _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc75fd40d7a6e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
