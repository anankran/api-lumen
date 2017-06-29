<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class SaleTest extends TestCase
{
    public function testGetSale()
    {
        $response = $this->call('GET', '/sale/4');
        $this->assertEquals(200, $response->status());
    }

    public function testNewSale()
    {
        $response = $this->call('POST', '/sale', ['name' => 'Test name', 'email' => 'test@test.com']);
        $this->assertEquals(200, $response->status());
    }
}
