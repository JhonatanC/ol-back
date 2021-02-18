<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select("SELECT roles.rol, users.* FROM users
        INNER JOIN roles ON roles.id = users.rol_id");
        return $users;
    }

    public function filterUser(Request $request){
        // Separar el tablas para que no tome un sólo id de una tabla
        $users = DB::select("SELECT  statuses.status ,roles.rol, users.*FROM users
        INNER JOIN roles ON roles.id = users.rol_id
        INNER JOIN statuses ON statuses.id = status_id
        WHERE name LIKE '%$request->name%'
        AND last_name LIKE '%$request->last_name%'
        AND dni LIKE '%$request->dni%'
        AND rol_id LIKE '%$request->rol_id%'
        AND status_id LIKE '%$request->status%'
        AND phone LIKE '%$request->phone%'
        AND email LIKE '%$request->email%'");
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create( $request->all() );
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update( $request->all() );
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return $user;
    }
}
