<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/http")
 */
class HttpController
{
    /**
     * @Route("/client-server-interaction")
     *
     * @throws \Twig_Error_Syntax
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Loader
     * @throws \InvalidArgumentException
     */
    public function php53To56Action(\Twig_Environment $twig)
    {
        return new Response(
            $twig->render('@App/Http/client_server_interaction.html.twig')
        );
    }

}
