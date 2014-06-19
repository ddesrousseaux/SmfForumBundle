<?php

namespace Sima\SmfForumBundle;

use Sima\SmfForumBundle\DependencyInjection\Security\Factory\SmfFactory;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SimaSmfForumBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new SmfFactory());
    }
}
