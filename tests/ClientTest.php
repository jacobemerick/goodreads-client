<?php

namespace Jacobemerick\GoodreadsClient;

use PHPUnit_Framework_TestCase;

class ClientTest extends PHPUnit_Framework_TestCase
{

    public function testIsInstanceOfClient()
    {
        $client = new Client();

        $this->assertInstanceOf('Jacobemerick\GoodreadsClient\Client', $client);
    }
}
