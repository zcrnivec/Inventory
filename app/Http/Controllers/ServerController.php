<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use Illuminate\Support\Facades\DB;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $server = Server::all();
        $server->load('assistance');
        return view('admin/servers', compact('server'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Server::create($request->all());
        DB::select(
          'call insert_server(?, ?, ?, ?, ?, ?, ?, ?, ?)',
          [
          $request->input('Vendor'),
      	  $request->input('Model'),
          $request->input('SerialNumber'),
          $request->input('Hypervisor'),
          $request->input('Cpu'),
          $request->input('Memory'),
          $request->input('Storage'),
          $request->input('Disks'),
          $request->input('assistance_id')
          ]
      );
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // echo $request->server_id;
        // echo "lololo";
        // dd($request->all());
        // $server = Server::findOrFail($request->server_id);
        // $server->update($request->all());
        DB::select(
          'call update_server(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
          [
          $request->input('server_id'),
          $request->input('Vendor'),
          $request->input('Model'),
          $request->input('SerialNumber'),
          $request->input('Hypervisor'),
          $request->input('Cpu'),
          $request->input('Memory'),
          $request->input('Storage'),
          $request->input('Disks'),
          $request->input('assistance_id')
          ]
      );
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // echo $request->server_id;
        // $server = Server::findOrFail($request->server_id);
        // $server->delete();
        DB::select(
          'call delete_server(?)',
          [
          $request->input('server_id'),
          ]
        );
        return back();
        return back();
    }
}
