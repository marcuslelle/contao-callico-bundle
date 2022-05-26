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

namespace Marcuslelle\ContaoCallicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment as TwigEnvironment;

/**
 * Class MyCustomController
 *
 * @Route("/my_custom",
 *     name="marcuslelle_contao_callico_my_custom",
 *     defaults={
 *         "_scope" = "frontend",
 *         "_token_check" = true
 *     }
 * )
 */
class MyCustomController extends AbstractController
{
    /**
     * @var TwigEnvironment
     */
    private $twig;

    /**
     * MyCustomController constructor.
     */
    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Generate the response
     */
    public function __invoke()
    {
        $animals = [

            [
                'species' => 'dogs',
                'color'   => 'white'
            ],
            [
                'species' => 'birds',
                'color'   => 'black'
            ], [
                'species' => 'cats',
                'color'   => 'pink'
            ], [
                'species' => 'cows',
                'color'   => 'yellow'
            ],
        ];

        return new Response($this->twig->render(
            '@MarcuslelleContaoCallico/MyCustom/my_custom.html.twig',
            [
                'animals' => $animals,
            ]
        ));
    }
}
