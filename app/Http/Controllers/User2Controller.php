<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use App\Services\User1Service;

Class User1Controller extends Controller {
    use ApiResponser;

    /**
    * The service to consume the User1 Microservice
    * @var User1Service
    */
    public $user1Service;
    /**
    * Create a new controller instance
    * @return void
    */

    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }
    
    // show all records (unsecure routes)
    public function getUsers()
    {
       
    }
    
    // show all records
    public function index()
    {
        return $this->successResponse($this->user1Service->obtainUsers1());
    }

    // add records
    public function add(Request $request)
    {
        return $this->successResponse($this->user1Service->createUsers1(request->all(), Response::HTTP_CREATED));
    }

    // delete records
    public function delete($id)
    {
        
    }

    // update records
    public function update(Request $request,$id)
    {
       
    }

    // show records
    public function show($id)
    {


    }

} 