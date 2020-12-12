<?php

namespace _PhpScoperdaf95aff095b;

use _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperdaf95aff095b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
