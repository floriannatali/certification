<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HttpControllerTest extends WebTestCase
{
    public function testClientserverinteraction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'http/client-server-interaction');

        $this->assertEquals(
            'Welcome to the Http:clientServerInteraction page',
            $crawler->filter('body > h1')->first()->text()
        );
    }

}
