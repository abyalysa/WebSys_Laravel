<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => "Monkey D'Luffey", 'email' => 'monkeey@gmail.com', 'phone' => '+63 999-888-7777'],
            ['id' => 2, 'name' => 'Druid Monkey', 'email' => 'druid@yahoo.com', 'phone' => '+63 666-777-8888'],
            ['id' => 3, 'name' => 'Monkey Buceneer', 'email' => 'grapes@gmail.com', 'phone' => '+63 111-222-3333'],
            ['id' => 4, 'name' => 'Papa Meat', 'email' => 'meat@papa.com', 'phone' => '+63 444-555-6666'],
            ['id' => 5, 'name' => 'Mer-Monkey', 'email' => 'water@monkey.com', 'phone' => '+63 777-888-9999'],
        ];

        return view('customers.index', compact('customers'));
    }
}