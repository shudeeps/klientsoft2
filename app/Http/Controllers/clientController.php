<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\log;
use Auth;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 
   


    public function index()
    {
        $clients=client::all();
        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        client::create($request->all());
        return redirect()->route('client.index')
        ->with('success','User created sucessfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           
if(Auth::guard('admin')->check())
{
    $role=1;
}
elseif (Auth::check()) {
   $role=0;
}


        $logs=client::find($id)->logs->where('role',$role)->sortByDesc('created_at');
        ///dd($logs);
        return view('client.log',compact('logs','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $client=client::find($id);
        return view('client.edit',compact('client'));
    
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
        $input=$request->all();
        client::find($id)->update($input);
        return redirect()->route('client.index')
        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        client::find($id)->delete();
          return redirect()->route('client.index')
                        ->with('success','user deleted successfully');
    }

    public function addlog(Request $request){
       $this->validate($request, [
            'data' => 'required',
          
            
        ]);
         log::create($request->all());
        return redirect()->back()
        ->with('success','log created sucessfully'); 
    }


  public function search(Request $request){
   $s=$request->input('s');
   //dd($s);
   //$client=client::where('full_name','like','%'.$s.'%');
   $clients=client::where('full_name','like','%'.$s.'%')
            ->orwhere('phone_no','like','%'.$s.'%')
            ->orwhere('address','like','%'.$s.'%')
            ->orwhere('org_name','like','%'.$s.'%')
             ->get();
   //dd($client);
             return view('client.search',compact('clients'));

  }
}
