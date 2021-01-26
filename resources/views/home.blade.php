@extends('layouts.navbar')

@section('title')
Home
@endsection

@section('css-imports')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
  <div class="add-content">
    <a href="/add"><button type="button" class="btn btn-primary" name="button">Add Content</button></a>
  </div>

  @if(session()->has('msg'))
    <div class="alert alert-success success-msg" role="alert">
      {{session('msg')}}
    </div>
  @endif



  <div class="records">
    <table class="table">
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Title</th>
         <th scope="col">Description</th>
         <th scope="col">Actions</th>
       </tr>
     </thead>
     <tbody>
       <!-- <tr>
         <th scope="row">1</th>
         <td>Edit</td>
         <td>Remove</td>
         <td>
           <ul class="list-group list-group-horizontal-sm">
             <li class="list-group-item"><a href="#"><i class="fa fa-edit edit-li"></i></a></li>
             <li class="list-group-item"><a href="#"><i class="fa fa-trash del-li"></i></a></li>
           </ul>
        </td>
       </tr>
       <tr>
         <th scope="row">2</th>
         <td>Jacob</td>
         <td>Thornton</td>
         <td>
           <ul class="list-group list-group-horizontal-sm">
             <li class="list-group-item"><a href="#"><i class="fa fa-edit edit-li"></i></a></li>
             <li class="list-group-item"><a href="#"><i class="fa fa-trash del-li"></i></a></li>
           </ul>
        </td>
       </tr>
       <tr>
         <th scope="row">3</th>
         <td>Larry</td>
         <td>the Bird</td>
         <td>
           <ul class="list-group list-group-horizontal-sm">
             <li class="list-group-item"><a href="#"><i class="fa fa-edit edit-li"></i></a></li>
             <li class="list-group-item"><a href="#"><i class="fa fa-trash del-li"></i></a></li>
           </ul>
        </td>
       </tr>
 -->

       @foreach($content as $c)
       <tr>
         <th scope="row">{{$c['id']}}</th>
         <td>{{$c['title']}}</td>
         <td>{{$c['content']}}</td>
         <td>
           <ul class="list-group list-group-horizontal-sm">
             <li class="list-group-item"><a href="/edit/{{$c['id']}}"><i class="fa fa-edit edit-li"></i></a></li>
             <li class="list-group-item">
               <form action="/delete/{{$c['id']}}" method="post">
                 @csrf
                 @method('DELETE')
                 <button type="submit" name="button"><i class="fa fa-trash del-li"></i></button>
               </form>
             </li>
           </ul>
         </td>
         </tr>
       @endforeach

       <!--
       <tr>
         <th scope="row">3</th>
         <td>Larry</td>
         <td>the Bird</td>
         <td>
           <ul class="list-group list-group-horizontal-sm">
             <li class="list-group-item"><a href="#"><i class="fa fa-edit edit-li"></i></a></li>
             <li class="list-group-item"><a href="#"><i class="fa fa-trash del-li"></i></a></li>
           </ul>
        </td>
       </tr> -->
     </tbody>
    </table>
  </div>
@endsection
