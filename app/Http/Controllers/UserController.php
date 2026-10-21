<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'abbythegre4t', 'full_name' => 'Abby Abinuman', 'role' => 'Developer'],
            ['id' => 2, 'username' => 'uradmin', 'full_name' => 'Lotso Toy', 'role' => 'Administrator'],
            ['id' => 3, 'username' => 'ruby_the_cat', 'full_name' => 'Ruby Abinuman', 'role' => 'Network Engineer'],
            ['id' => 4, 'username' => 'btd6_isc00l', 'full_name' => 'Tom Hardy', 'role' => 'Game Designer'],
            ['id' => 5, 'username' => 'daRT_monke', 'full_name' => 'Quincy Monkey', 'role' => 'Primary Monkey'],
        ];

        return view('users.index', compact('users'));
    }
}