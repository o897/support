<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;


class UserController extends Controller
{


    use HasRoles;  
    
    public function __construct() 
    {
        $this->middleware(['role:user']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    //    $tickets = Ticket::where('user_id',Auth::id())->get();
    $tickets = Auth::user()->tickets()->get();

    return view('user.index')->with('tickets',$tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::putFileAs('files', $request->file('file'), $request->user()->id );
        $uuid = Str::uuid();
        
        $customer = ([ 
            'ticket_id' =>  $uuid,
            'post_id' => $uuid,
            'user_id' => Auth::id(),
            'name' => auth()->user()->name,
            'file' => $amazon_s3,
            'title' => $request->title,
            'content' => $request->input('content'),
            'priority' => $request->input('priority'),
            'label' => implode(',', (array) $request->input('label')),
            'categories' => implode(',', (array) $request->input('categories')),
        ]);

        
        Ticket::create($customer);

        Comment::create($customer);

        Log::create([
            'user' => auth()->user()->getRoleNames(),
            'message' => 'Created a new ticket with a' . $request->priority . 'priority.',
        ]);

        // Email the admin the ticket info

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
       
        return view('user.show')->with([
            'ticket' => $ticket,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit')->with('user',$user);
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
        User::update([
            'name' => $request->name,
            'location' => $request->location,
            'password' => Hash::make($request->password)
            
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
