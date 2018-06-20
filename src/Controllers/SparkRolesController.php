<?php
namespace Danielnegoita\SparkRoles\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SparkRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// test comment
       return view('dashboard');
    }
}