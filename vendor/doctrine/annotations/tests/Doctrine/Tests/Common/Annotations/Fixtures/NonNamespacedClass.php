<?php

namespace _PhpScoperf3f1be0d8a30;

use _PhpScoperf3f1be0d8a30\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf3f1be0d8a30\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf3f1be0d8a30\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
