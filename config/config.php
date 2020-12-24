<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab;

use _PhpScopera37d6fb0b1ab\Nette\Utils\Strings;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services.php');
    $containerConfigurator->import(__DIR__ . '/../packages/*/config/*.php');
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::INDENTATION, \Symplify\EasyCodingStandard\ValueObject\Option::INDENTATION_SPACES);
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::LINE_ENDING, \PHP_EOL);
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::CACHE_DIRECTORY, \sys_get_temp_dir() . '/_changed_files_detector%env(TEST_SUFFIX)%');
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::CACHE_NAMESPACE, \_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::webalize(\getcwd()));
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::PATHS, []);
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SETS, []);
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::FILE_EXTENSIONS, ['php']);
    $parameters->set('env(TEST_SUFFIX)', '');
};
