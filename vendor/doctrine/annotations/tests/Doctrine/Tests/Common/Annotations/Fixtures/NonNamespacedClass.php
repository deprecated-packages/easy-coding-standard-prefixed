<?php

namespace _PhpScoperd3d57724c802;

use _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd3d57724c802\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
