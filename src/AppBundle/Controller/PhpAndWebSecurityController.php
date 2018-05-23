<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/php-and-web-security")
 */
class PhpAndWebSecurityController
{
    /**
     * @param \Twig_Environment $twig
     * @return Response
     *
     * @Route("/php-53-to-56")
     * @throws \Twig_Error_Syntax
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Loader
     * @throws \InvalidArgumentException
     */
    public function php53To56Action(\Twig_Environment $twig)
    {
        return new Response(
            $twig->render('@App/PhpAndWebSecurity/php53_to56.html.twig')
        );
    }
}
