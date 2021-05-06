<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents=Document::paginate(15);
        return view('Backend.documents.index',['documents'=>$documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            
        ]);
       Document::create($data);
        
        return redirect()->route('listDocument');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $documents=Document::Where('title','LIKE',"%$request->search%")
                                ->orWhere('description','LIKE',"%$request->search%")
                                ->get();
        return view('Backend.documents.index',['documents'=>$documents]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documents=Document::where('id',$id)->first();
        return view('Backend.documents.edit',['documents'=>$documents]);
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
            'title'=>'required',
            'description'=>'required',
            
        ]);
        $document=Document::where('id',$id)->update($data);
    
        return redirect()->route('listDocument');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get=Document::where('id',$id)->first();
        if($get->photo!=null&&file_exists("/storage/$get->photo")){
            unlink('storage/'.$get->photo);
        }
        $get->delete();
        return redirect()->route('listDocument');
    }
}
