<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhpAndWebSecurityControllerTest extends WebTestCase
{
    public function testPhp53to56()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'php-and-web-security/php-53-to-56');

        $this->assertEquals(
            'Welcome to the PhpAndWebSecurity:php53To56 page',
            $crawler->filterXPath('//body/h1')->first()->text()
        );
    }

}
