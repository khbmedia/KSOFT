@extends('Backend.layouts.app')

@section('content')

@section('title','List Historys')

@section('icon-title','fa fa-history')



   

        

<div class="container">
<a href="{{route('createHistory')}}" title="Add History"><button class="btn btn-success rounded float-right mb-md-3">Add New</button></a>
<div class="col-md-12 card">
<div class="row">

    

<div class="col-md-6 offset-md-6 mt-md-3 mb-md-3">

    <form class="float-right" action="{{route('searchHistory')}}" method="get">

        <div class="form-inline">

            <input type="text" name="search" class="form-control">

            <input type="submit" class="btn btn-success btn-sm" value="Search">

        </div>

    </form>

</div>

</div>

<div class="row">

<table class="table table-bordered">

    <thead>

        <th>ID</th>

  
        <th>Year</th>
        <th>Title</th>
        <th>Description</th>
        <td>Sort Order</td>
        <th>Action</th>

    </thead>

    <tbody>

        @foreach($history as $item)

        <tr>

            <td>{{$item->id}}</td>

        
            <td>{{$item->year}}</td>
            <td>{{$item->title}}</td>
        <td>{!!$item->description!!}</td>
        <td>{{$item->sort_order}}</td>
            <td>

            <a href="{{route('deleteHistory',$item->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a>

            <a href="{{route('editHistory',$item->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a>

            </td>

        </tr>

        @endforeach

        

    </tbody>

</table>



</div>



<div class="row">

    <div class="col-md-6 offset-md-6 float-right">

        <nav>

            <ul class="pagination">

                <li class="page-item">{{$history->links()}}</li>

            </ul>

        </nav>

    </div>

</div>
</div>

</div>



    

@endsection
