<?php

declare(strict_types=1);

use Ssch\TYPO3Rector\Rector\v10\v1\BackendUtilityEditOnClickRector;
use Ssch\TYPO3Rector\Rector\v10\v1\RegisterPluginWithVendorNameRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../services.php');

    $services = $containerConfigurator->services();

    $services->set(RegisterPluginWithVendorNameRector::class);

    $services->set(BackendUtilityEditOnClickRector::class);
};
