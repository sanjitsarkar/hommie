<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Room;
use App\Bed;
use App\hostel;
class HostelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
return view('admin.hostels.index')->with('hostels',hostel::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.hostels.create');
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
$host=new hostel;
        $this->validate($request,
        [
'name' => 'required',
'desc' => 'required',
'total' => 'required',
'img' => 'required|image',
'location' => 'required',
'college' => 'required',
        ]);
$name = str_slug($request->name);
if($request->hasFile('img'))
{
$img = $request->img;
$img_new_name = time().$img->getClientOriginalName();
$img->move('app/uploads/hostels/'.$name, $img_new_name);
}

$host->slug = $name;
$host->name=$request->name;
$host->desc=$request->desc;
$host->img='app/uploads/hostels/'.$name.'/'.$img_new_name;
$host->college=$request->college;
$host->location=$request->location;
$host->total=$request->total;
$host->save();


    $total = $request->total;
for($i = 1;$i<($total+1);$i++)
{
   Room::create(
       [
'hostel_name'=>$request->name,
'room_no'=>$i
       ]
       );
    }



     return redirect()->route('hostel.index');



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
        $host = hostel::find($id);
        return view('admin.hostels.update')->with('host',$host);
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

        $host = hostel::find($id);

        $this->validate($request,
        [
'name' => 'required',
'desc' => 'required',
'total' => 'required',
'img' => 'required|image',
'location' => 'required',
'college' => 'required',
        ]);
$name = str_slug($request->name);
if($request->hasFile('img'))
{
$img = $request->img;
$img_new_name = time().$img->getClientOriginalName();
$img->move('app/uploads/hostels/'.$name, $img_new_name);
}

$htotal = $host->total;
$total = $request->total;
$diff = 0;




// if($total>$htotal)
// {
// $diff = $total-$htotal;
//     for($j=$htotal+1; $j<=$diff;$j++)
//     {
//     Room::create(
//         [
//     'hostel_name'=>$request->name,
//     'room_no'=>$j
//         ]
//         );
//     }
// }

// else


Session::flash('info',$diff." ".$htotal." ".$total);

$host->slug = $name;
$host->name=$request->name;
$host->desc=$request->desc;
$host->img='app/uploads/hostels/'.$name.'/'.$img_new_name;
$host->college=$request->college;
$host->location=$request->location;
$host->total=$request->total;
$host->save();







     return redirect()->route('hostel.index');
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
        $host = hostel::find($id);
Room::where('hostel_name',$host->name)->delete();

        $host->delete();

$bed = Bed::where('hostel_name',$host->name)->delete();

$room = Room::where('hostel_name',$host->name)->delete();
        return redirect()->back();
    }
}
