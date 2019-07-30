<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Client;

class ServerController extends Controller
{
    public function EditServer(Request $request){
        $id=$request->input('server');
        $server= Server::find($id);
        return view('/Edit_Server',compact('server'));
    }
    public function saveUpdate(Request $request){
        $id=$request->input('id');
        $server= Server::find($id);
        if (isset($server)) {
        $server->Server_description=$request->input('Server_description');
        $server->LPAR_prefix=$request->input('LPAR_prefix');
        $server->Server_type=$request->input('Server_type');
        $server->save();}
        else{
            return view('view_client');
        }
    }
    public function NewServer(Request $request){
        $id=$request->input('id');
        $client= Client::find($id);
        return view('/NewServer',compact('client'));
    }
    public function createServer(Request $request){
        $id=$request->input('id');
        $server=new Server();
        $server->Client_FK_id=$id;
        $server->Server_name=$request->input('Server_name');
        $server->Server_description=$request->input('Server_description');
        $server->LPAR_prefix=$request->input('LPAR_prefix');
        $server->Server_type=$request->input('Server_type');
        $server->save();
    }

}
