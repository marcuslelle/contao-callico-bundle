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

namespace Marcuslelle\ContaoCallicoBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CallicoElementController
 *
 * @ContentElement(CallicoElementController::TYPE, category="callico_elements", template="ce_callico_element")
 */
class CallicoElementController extends AbstractContentElementController
{
    public const TYPE = 'callico_element';

    /**
     * Generate the content element
     */
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        $template->text = $model->text;

        return $template->getResponse();
    }
}
