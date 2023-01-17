<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //include the middlewares
    }


    public function index()
    {
        // $tickets_count = Ticket::all()->count();
        $tickets = Ticket::all();
        
        return view('admin.index')->with([
            'tickets' => $tickets,

        
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        // dd($ticket);

        return view('admin.show')->with('ticket',$ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);

        $admins = User::all()->where('role',2);

        return view('admin.edit')->with([
            'ticket' => $ticket,
            'admins' => $admins
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'agent' => 'required',
        ]);

        $agent_name = User::where('id',$request->input('agent'))->value('name');

        $ticket_update = Ticket::where('id',$id)
        ->update(['agent' => $agent_name]);

        dd("Success");
        return redirect->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
