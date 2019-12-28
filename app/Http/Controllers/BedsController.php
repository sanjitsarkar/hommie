<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\hostel;
use App\Bed;
use Session;
class BedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($hostel_name,$id)
    {
        //
$host = hostel::where('slug',$hostel_name)->first();
        $room = Room::where('room_no',$id)->where('hostel_name',$host->name)->first();

        return view('admin.beds.index')->with('room',$room);
    }
    public function display($hostel_name,$room_no)
    {
        //
$host = hostel::where('slug',$hostel_name)->first();


        $beds = Bed::where('room_no',$room_no)->where('hostel_name',$host->name)->get()->all();

        return view('admin.beds.display')->with('beds',$beds)->with('host',$host)->with('room_no',$room_no);
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


$room_no =$request->room_no;
$bed_no =$request->bed_no;
$hostel_name =$request->host_name;


        $bed=Bed::where('room_no',$room_no)->where('bed_no',$bed_no)->where('hostel_name',$hostel_name)->get()->first();
        $this->validate($request,
        [
'bed_no' => 'required',
'college' => 'required',
'name' => 'required',
'img' => 'required|image',
'check_out_date' => 'required',
'check_in_date' => 'required',
        ]);
$name = str_slug($request->hostel_name);
// $room_no = $request->room_no;
if($request->hasFile('img'))
{
$img = $request->img;
$img_new_name = time().$img->getClientOriginalName();
$img->move('app/uploads/hostels/'.$name, $img_new_name);
}

$bed->room_no =$request->room_no;
$bed->bed_no =$request->bed_no;
$bed->hostel_name =$request->host_name;

$bed->bed_no=$request->bed_no;
$bed->check_out_date=$request->check_out_date;
$bed->img='app/uploads/hostels/'.$name.'/'.$img_new_name;
$bed->college_name=$request->college;
$bed->student_name=$request->name;
$bed->check_in_date=$request->check_in_date;
$bed->save();
// return redirect()->back();
return redirect()->route('bed.display',['hostel_name'=>str_slug($request->host_name),'room_no'=>$request->room_no]);
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
    public function edit($hostel_name,$id,$bed_no)
    {
        //
        $host = hostel::where('slug',$hostel_name)->first();
        $beds= Bed::where('room_no',$id)->where('hostel_name',$host->name)->where('bed_no',$bed_no)->first();

        return view('admin.beds.edit')->with('bed',$beds);
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
    public function destroy($hostel_name,$id,$bed_no)
    {
        //
$host = hostel::where('slug',$hostel_name)->first();
$room = Room::where('hostel_name',$host->name)->where('room_no',$id)->get()->first();

$bed=Bed::where('room_no',$room->room_no)->where('bed_no',$bed_no)->where('hostel_name',$host->name)->get()->first();
   $bed->delete();
   return redirect()->route('bed.display',['hostel_name'=>str_slug($bed->hostel_name),'room_no'=>$bed->room_no]);
}
}
