<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function test_hello_for_undefine_name(): void {
        $client = static::createClient();
        $client->request('GET', '/hello'); // Change the URL to /hello/World (or any other name you want to test

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson($client->getResponse()->getContent());

        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertEquals('Hello World', $responseData['message']);
    }

    public function test_hello_for_defined_name(): void {
        $client = static::createClient();
        $client->request('GET', '/hello/John'); // Change the URL to /hello/John (or any other name you want to test

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson($client->getResponse()->getContent());

        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertEquals('Hello John', $responseData['message']);
    }
}
