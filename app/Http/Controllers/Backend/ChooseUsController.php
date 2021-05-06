<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChooseUs;
class ChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choose_us=ChooseUs::paginate(15);
        $data=[
            'choose_us'=>$choose_us
        ];
        return view('Backend.chooseus.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.chooseus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'icon'=>'required',
            'thumbnail'=>'required',
            'main_title'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);
        
        $choose_us=new ChooseUs();
        $choose_us->icon=$request->icon;
        $choose_us->main_title=$request->main_title;
        $choose_us->thumbnail=$request->file('thumbnail')->store('Thumbnail');
        $choose_us->title=$request->title;
        $choose_us->description=$request->description;
        $choose_us->save();
        return redirect()->route('listChooseUs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $choose_us=ChooseUs::where('title','LIKE',"%$request->search%")
                            ->orWhere('description','LIKE',"%$request->search%")
                            ->paginate(15);
        $data=[
            'choose_us'=>$choose_us
        ];
        return view('Backend.chooseus.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $choose_us=ChooseUs::where('id',$id)->first();
        $data=[
            'choose_us'=>$choose_us
        ];
        return view('Backend.chooseus.edit',$data);
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
        $data=$this->validate($request,[
            'icon'=>'required',
            'main_title'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);
        $path=$request->old_image;
        if($request->hasFile('thumbnail')){
            unlink("/storage/$path");
            $path=$request->file('thumbnail')->store('Thumbnail');
            $data['thumbnail']=$path;
        }
        
        ChooseUs::where('id',$id)->update($data);
        return redirect()->route('listChooseUs');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get_old=ChooseUs::where('id',$id)->first();
        if($get_old->thumbnail!=null&&file_exists("/storage/$get_old->thumbnail")){
            unlink("/storage/$get_old->thumbnail");
        }
        ChooseUs::where('id',$id)->delete();
        return redirect()->route('listChooseUs');
    }
}
