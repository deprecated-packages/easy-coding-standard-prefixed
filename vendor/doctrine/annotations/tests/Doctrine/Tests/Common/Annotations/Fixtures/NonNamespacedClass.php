<?php

namespace _PhpScoperf65af7a6d9a0;

use _PhpScoperf65af7a6d9a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf65af7a6d9a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf65af7a6d9a0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
