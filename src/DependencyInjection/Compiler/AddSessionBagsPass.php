<?php

declare(strict_types=1);

/*
 * This file is part of Callico Bundle.
 * 
 * (c) Marcus Lelle 2022 <info@biades.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/marcuslelle/contao-callico-bundle
 */

namespace Marcuslelle\ContaoCallicoBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @internal
 */
class AddSessionBagsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->has('session')) {
            return;
        }

        $session = $container->findDefinition('session');
        $session->addMethodCall('registerBag', [new Reference('Marcuslelle\ContaoCallicoBundle\Session\Attribute\ArrayAttributeBag')]);
    }
}
