<?php

namespace App\Tests\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PruebaControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/api/prueba');

        $this->assertResponseIsSuccessful();
        $this->assertSame('hola symfony', $client->getResponse()->getContent());
    }
}
