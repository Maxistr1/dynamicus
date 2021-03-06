<?php

namespace Audicus\Factory;

use Audicus\Action\ListAction;
use Common\Container\ConfigInterface;
use Psr\Container\ContainerInterface;


/**
 * Class ListActionFactory
 * @package Audicus\Factory
 */
class ListActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $redis = $container->get(\Redis::class);
        $config = $container->get(ConfigInterface::class);
        return new ListAction($redis, $config);
    }
}
