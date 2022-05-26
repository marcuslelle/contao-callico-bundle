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

namespace Marcuslelle\ContaoCallicoBundle;

use Marcuslelle\ContaoCallicoBundle\DependencyInjection\Compiler\AddSessionBagsPass;
use Marcuslelle\ContaoCallicoBundle\DependencyInjection\MarcuslelleContaoCallicoExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MarcuslelleContaoCallicoBundle
 */
class MarcuslelleContaoCallicoBundle extends Bundle
{
	public function getContainerExtension(): MarcuslelleContaoCallicoExtension
	{
		return new MarcuslelleContaoCallicoExtension();
	}

	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
		$container->addCompilerPass(new AddSessionBagsPass());
		
	}
}
