<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;

return static function (ContainerConfigurator $containerConfigurator): void {

    $services = $containerConfigurator->services();

    $services
        ->set(HeaderCommentFixer::class)
        ->call('configure', [[
            'header' => "This file is part of Callico Bundle.\n\n(c) Marcus Lelle 2022 <info@biades.de>\n@license GPL-3.0-or-later\nFor the full copyright and license information,\nplease view the LICENSE file that was distributed with this source code.\n@link https://github.com/marcuslelle/contao-callico-bundle",
        ]])
    ;
};