<?php

namespace _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
