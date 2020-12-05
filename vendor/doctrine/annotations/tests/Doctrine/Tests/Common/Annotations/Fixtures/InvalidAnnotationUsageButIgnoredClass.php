<?php

namespace _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
