<?php

namespace _PhpScoperaad82bb90a86;

use _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperaad82bb90a86\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
