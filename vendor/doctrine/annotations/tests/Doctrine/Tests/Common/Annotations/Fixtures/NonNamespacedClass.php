<?php

namespace _PhpScoperc4b135661b3a;

use _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc4b135661b3a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
