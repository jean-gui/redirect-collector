<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RedirectControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();
        $client->insulate();
        $client->followRedirects();

        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}