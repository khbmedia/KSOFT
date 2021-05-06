<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\User;
use App\Service;
use App\Team;
use App\Price;
use App\Document;
use App\History;
use App\Frequently;
use App\Slide;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users=User::all()->count();
        $servics=Service::all()->count();
        $teams=Team::all()->count();
        $price=Price::all()->count();
        $document=Document::all()->count();
        $history=History::all()->count();
        $qanda=Frequently::all()->count();
        $slide=Slide::all()->count();

        $data=[
            
            'users'=>$users,
            'services'=>$servics,
            'teams'=>$teams,
            'prices'=>$price,
            'documents'=>$document,
            'history'=>$history,
            'qanda'=>$qanda,
            'slides'=>$slide
        ];
        // dd($data);
        return view('Backend.dashboard',$data);
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
