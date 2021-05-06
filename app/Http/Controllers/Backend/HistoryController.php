<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\History;
class HistoryController extends Controller
{
   
    public function index()
    {
        $history=History::paginate(15);
        return view('Backend.history.index',['history'=>$history]);
    }

    public function create()
    {
        return view('Backend.history.create');
    }

    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'year'=>'required',
            'title'=>'required',
            'description'=>'required',
            'sort_order'=>'required'          
        ]);
        History::create($data);
        return redirect()->route('listHistory');
    }

    public function show(Request $request)
    {
        $history=History::where('year','LIKE',"%$request->search%")
                            ->orWhere('title','LIKE',"%$request->search%")
                            ->orWhere('description','LIKE',"%$request->search%")
                            ->paginate(15);
        return view('Backend.history.index',['history'=>$history]);
    }

    public function edit($id)
    {
       
        $data=[
            'history'=>History::where('id',$id)->first()
        ];
        return view('Backend.history.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $data=$this->validate($request,[
            'year'=>'required',
            'title'=>'required',
            'description'=>'required',
            'sort_order'=>'required'           
        ]);
        History::where('id',$id)->update($data);
        return redirect()->route('listHistory');
    }

    public function destroy($id)
    {
        History::where('id',$id)->delete();
        return redirect()->route('listHistory');
    }
}
