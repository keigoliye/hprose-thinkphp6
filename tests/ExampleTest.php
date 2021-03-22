<?php


namespace tests;


use Hprose\Http\Client;

class ExampleTest extends BaseTestCase
{
    public function testPing()
    {
        $client = Client::create('http://127.0.0.1:8000/index/server', false);
        $res = $client->ping();

        self::assertEquals($res, 'PONG');
    }
}