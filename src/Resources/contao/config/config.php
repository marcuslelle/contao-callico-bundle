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

use Marcuslelle\ContaoCallicoBundle\Model\MlCallicoModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['ml_modules']['callico_collection'] = array(
    'tables' => array('tl_ml_callico')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_ml_callico'] = MlCallicoModel::class;
