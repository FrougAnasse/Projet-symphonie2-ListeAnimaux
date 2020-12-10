<?php

namespace ContainerZxLh4ki;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bv3_9ldService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bv3.9ld' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bv3.9ld'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\FamilleRepository', 'getFamilleRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\FamilleRepository',
        ]);
    }
}
