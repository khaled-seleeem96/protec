<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Guest;
use App\Client;
use App\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class adminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function msg()
    {
        if(auth::user()->permission ==1 ){
        $x=Guest::all();
        return view('guest')->with('data',$x);
        }
        return redirect()->route('index')  ;
    }
    public function deleteGuest($id)
    {
        //
        if(auth::user()->permission ==1 ){
        $d=Guest::findOrFail($id);
        $d->delete();
        return redirect()->back();
        }
        return redirect()->route('index')  ;
    }
    public function client()
    {
        $x=User::where('permission',0)->get();
        return view('client')->with('data',$x);
    }
    public function deleteClient($id)
    {
        //
        if(auth::user()->permission ==1 ){

        $d=client::findOrFail($id);
        $d->delete();
        return redirect()->back();
        }
    }
    public function addClient(Request $request)
    {

        if(auth::user()->permission ==1 )
        {
        $x=new User();
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|min:3|max:50',
            'address'=>'required|max:255',
            'phone'=>'required|max:15',
            'password' => 'required|min:6', 
    
        ]);
        if ($validatedData) 
        {
        $x->email=$request->email;
        $x->name=$request->name;
        $x->address=$request->address;
        $x->phone=$request->phone;
        $x->password=bcrypt($request->password);
        $x->save();
          
        return redirect()->route('client') ->withErrors($validatedData) ;}
        }
        return redirect()->route('/')  ;
    }
    public function msgClient()
    {
        if(auth::user()->permission ==1 )
        {     
            $x=Message::all();     
        return view('msgClient')->with('data',$x);
        } 
        // elseif(auth::user()->permission ==2 )
        // {
        //     // $x=Message::where('category_id',Auth::user()->category_id)=>get();
        //     return view('msgClient')->with('data',$x);
        // }
        
        return redirect()->route('/')  ;
    }
    public function updateStatus(Request $request,$id)
    {
        
        if(auth::user()->permission ==1 ){
            $msg=Message::findOrFail($id);
            if($msg->done == 0 && $request->new_status == 1){
                $msg->done=$request->new_status;
                $msg->checked_by=$request->user;
                $msg->save();
                return response()->json([
                    'status'=>1,
                    'new_status'=> $request->new_status,
                    'checked_by' => Auth::user()->name
                    ]);
            } else if($request->new_status == 2){
                $msg->done=$request->new_status;
                $msg->done_by=$request->user;
                $msg->save();
                return response()->json([
                    'status'=>1,    
                    'new_status'=> $request->new_status,
                    'done_by' => Auth::user()->name
                    ]);
            }
        
        }
        
    }
    public function postLogin(Request $request)
    {
    $credentials = [
        'email' => $request['email'],
        'password' => $request['password'],
    ];

    if (Auth::attempt($credentials)) {
       return response()->json(['status'=>1,'msg'=>'done']);        
    }

    return response()->json(['status'=>2,'msg'=>'email or passwor error']);
}
    public function message_client(Request $request)
    {
        $x=new Message();
        $validatedData = $request->validate([
            'categories_id' => 'required|max:255',
            'msg' => 'required|max:255', 
        ]);
        if ($validatedData) 
        {
        $x->client_id=$request->client_id;
        $x->categories_id=$request->categories_id;
        $x->msg=$request->msg;
        $x->save();
        Auth::logout();
        return redirect()->route('index') ->withErrors($validatedData) ;

          }
        
    }
    public function index()
    {
        //
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
        //
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
    public function update(Request $request, $id)
    {
        //
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
