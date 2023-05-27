<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;

    /**
    * The service to consume the User2 Microservice
    * @var User2Service
    */
    public $user2Service;

    /**
    * Create a new controller instance
    * @return void
    */
    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }

    // show all records
    public function index()
    {
        return $this->successResponse($this->user2Service->obtainUsers2());
    }

    // add records
    public function add(Request $request)
    {
        return $this->successResponse($this->user2Service->createUser2($request->all(), Response::HTTP_CREATED));
    }

    // delete records
    public function delete($id)
    {
        return $this->successResponse($this->user2Service->deleteUser2($id));
    }

    // update records
    public function update(Request $request,$id)
    {
        return $this->successResponse($this->user2Service->editUser2($request->all(), $id));
    }

    // show records
    public function show($id)
    {
        return $this->successResponse($this->user2Service->obtainUser2($id));
    }

} 