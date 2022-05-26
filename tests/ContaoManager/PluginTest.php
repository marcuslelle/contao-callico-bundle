<?php

/*
 * This file is part of Callico Bundle.
 * 
 * (c) Marcus Lelle 2022 <info@biades.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/marcuslelle/contao-callico-bundle
 */
declare(strict_types=1);

namespace Marcuslelle\ContaoCallicoBundle\Tests\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use Contao\TestCase\ContaoTestCase;
use Marcuslelle\ContaoCallicoBundle\ContaoManager\Plugin;
use Marcuslelle\ContaoCallicoBundle\MarcuslelleContaoCallicoBundle;

/**
 * Class PluginTest
 *
 * @package Marcuslelle\ContaoCallicoBundle\Tests\ContaoManager
 */
class PluginTest extends ContaoTestCase
{
    /**
     * Test Contao manager plugin class instantiation
     */
    public function testInstantiation(): void
    {
        $this->assertInstanceOf(Plugin::class, new Plugin());
    }

    /**
     * Test returns the bundles
     */
    public function testGetBundles(): void
    {
        $plugin = new Plugin();

        /** @var array $bundles */
        $bundles = $plugin->getBundles(new DelegatingParser());

        $this->assertCount(1, $bundles);
        $this->assertInstanceOf(BundleConfig::class, $bundles[0]);
        $this->assertSame(MarcuslelleContaoCallicoBundle::class, $bundles[0]->getName());
        $this->assertSame([ContaoCoreBundle::class], $bundles[0]->getLoadAfter());
    }

}
