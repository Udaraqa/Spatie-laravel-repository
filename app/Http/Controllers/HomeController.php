<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        //Role::create(['name' => 'Admin']);
        //Role::create(['name' => 'QALead']);
        //Role::create(['name' => 'QAEngineer']);

        //Permission::create(['name' => 'delete testplans']);
        //Permission::create(['name' => 'add testcases']);
        //Permission::create(['name' => 'modify testcases']);
        //Permission::create(['name' => 'delete testcases']);

        //$permission=Permission::create(['name' => 'edit testplans']);
        //$role = Role::findById(2);
        //$permission = Permission::findById(1);
        //$role->givePermissionTo($permission);
       
       //auth()->user()->givePermissionTo('add testplans');
      //auth()->user()->assignRole('QALead');

      //return auth()->user()->permissions;

        return view('home');
    }
}
