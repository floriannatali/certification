<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/http")
 */
class HttpController
{
    /**
     * @Route("/client-server-interaction")
     * @Template("@App/Http/client_server_interaction.html.twig")
     */
    public function php53To56Action()
    {
        return [];
    }
}
