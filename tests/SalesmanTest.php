<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class SalesmanTest extends TestCase
{
    public function testGetSalesman()
    {
        $response = $this->call('GET', '/salesman');
        $this->assertEquals(200, $response->status());
    }

    public function testNewSalesman()
    {
        $response = $this->call('POST', '/salesman', ['salesman' => 1, 'value' => 325]);
        $this->assertEquals(200, $response->status());
    }
}
