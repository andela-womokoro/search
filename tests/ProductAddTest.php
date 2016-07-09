<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductAddTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddNewProduct()
    {
        $this->visit('/product/add')
	         ->type('product 1', 'name')
	         ->select('Gadgets', 'category')
	         ->type('some description...', 'description')
	         ->type('500.35', 'price')
	         ->press('Add Product')
	         ->see('Product successfully added');
    }
}
