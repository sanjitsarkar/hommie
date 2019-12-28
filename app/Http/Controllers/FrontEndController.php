<?php

namespace App\Http\Controllers;
use App\hostel;
use Illuminate\Http\Request;
use App\Room;
use App\Bed;
class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function book($name)
    {
        $host = hostel::where('slug',$name)->first();
        $room = room::where('hostel_name',$host->name)->get();

return view('hostel')->with('host',$host)->with('room',$room);
    }
    public  function search()
    {
        if(request('query')=="")
        {
$res = "Please Dont't Search With Empty Field";
            return view('search')->with('res',$res)->with('search',request('query'));
Session::flash('info',$res);
        }
        else
            {

        $host = hostel::where('name','like',  '%' . request('query') . '%')->orWhere('college','like',  '%' . request('query') . '%')->orWhere('location','like',  '%' . request('query') . '%')->get();
        return view('search')->with('hosts',$host)
        ->with('search',request('query'));
            }

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
    public function bookroom()
    {

        return view('room');
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
