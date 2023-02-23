<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Task;
use App\Models\User;
use App\Models\Admin;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class AdminController extends Controller
{
    use HasRoles;

    public function __construct()
    {
        $this->middleware(['role:admin']);

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::latest()->get();
		$logs = Log::latest()->get();
        $tasks = Task::all();


		//All users
        $locationCounts = DB::table('users')
        ->join('tickets', 'users.id', '=', 'tickets.user_id')
        ->select('users.location', DB::raw('count(*) as ticket_count'))
        ->groupBy('users.location')
        ->get();

        // dd($locationCounts);
        // YOu should db raw on get the should be a colummn called count get the count from there        
        
        $users = User::role('user')->get(); //regular user
        $agent = User::role('agent')->get();
        $admin = User::role('admin')->get();

        return view('admin.index')->with([

            'clients' => $locationCounts,
            'tickets' => $tickets,
            'users' => $users,
            'agents' => $agent,
            'logs' => $logs,
            'tasks' => $tasks
        
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Creating a new user and assigning roles
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


        // Register user and assign roles
        $role = Role::where('name', '=', $request->role)->first();

        $user = User::create([
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'password' => Hash::make($request->password),
        ])->assignRole($role);

        return redirect()->back();

    }

    public function task(Request $request)
    {

        Task::create([
            'user_id' => Auth::id(),
            'content' => $request->content
        ]);

        return redirect()->back();

    }

    public function removeTask(Request $request,$id)
    {
        Task::find($id)->delete();

        return redirect()->back();
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

        // To find specifics about the ticket
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
       //Assign the agent to a ticket
        $request->validate([
            'agent' => 'required',
        ]);

        $agent_id = User::where('id',$request->input('agent'))->value('id');

        $ticket_update = Ticket::where('ticket_id',$id)
        ->update(['agent_id' => $agent_id]);

        return redirect()->back();
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
