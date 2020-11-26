<?php

namespace _PhpScoperb2e2c0c42e71;

use _PhpScoperb2e2c0c42e71\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb2e2c0c42e71\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb2e2c0c42e71\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
