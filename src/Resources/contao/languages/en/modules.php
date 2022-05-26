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

use Marcuslelle\ContaoCallicoBundle\Controller\FrontendModule\CallicoListingModuleController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['ml_modules'] = 'Marcus Lelle Modules';
$GLOBALS['TL_LANG']['MOD']['callico_collection'] = ['Backend Modultyp', 'Backend Modultyp Beschreibung'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['callico_modules'] = 'Callico Frontend Modul';
$GLOBALS['TL_LANG']['FMD'][CallicoListingModuleController::TYPE] = ['Callico Frontend Modultyp', 'Callico Frontend Modul Beschreibung'];

