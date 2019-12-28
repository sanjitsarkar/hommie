<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\hostel;
use Session;
use App\Bed;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $host = hostel::find($id);

        return view('admin.rooms.index')->with('host',$host);
    }
    public function display($host)
    {
        //
        $rooms = Room::where('hostel_name',$host)->get()->all();

        return view('admin.rooms.display')->with('rooms',$rooms)->with('host',$host);
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

$slug = $request->slug;

$host = hostel::where('slug',$slug)->first();
        $this->validate($request,
        [
'bed' => 'required',
'booked' => 'required',
'img' => 'required|image',
'room_type'=>'required'
        ]);
$name = $request->slug;
if($request->hasFile('img'))
{
$img = $request->img;
$img_new_name = time().$img->getClientOriginalName();
$img->move('app/uploads/hostels/'.$name.'/'.$request->room,$img_new_name);
}

$total = $request->booked;

Session::flash('info',$total);
for($i = 1;$i<($total+1);$i++)
{
   Bed::create(
       [
'hostel_name'=>$request->host_name,
'room_no'=>$request->room,
'bed_no'=>$i
       ]
       );
    }
$room = Room::where('room_no',$request->room)->where('hostel_name',$request->host_name)->get()->first();
$room->total_bed = $request->bed;
$room->room_type = $request->room_type;
$room->booked_bed = $request->booked;
$room->img = 'app/uploads/hostels/'.$name.'/'.$request->room.'/'.$img_new_name;
$room->save();
return redirect()->route('room.display',['host'=>$host->name]);


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
    public function edit($hostel_name,$id)
    {
        //
        $host = Hostel::where('slug',$hostel_name)->first();


        return view('admin.rooms.edit')->with('host_name',$host->name)->with('id',$id);
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
