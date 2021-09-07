@extends('/template/welcome')
@section('content')

<h1>Create comment  <button type="button" class="btn btn-primary">Primary</button></h1>
<table class="table border border-1 ">
    <thead>
      <tr>
        <th scope="col">url</th>
        <th scope="col">img</th>
        <th scope="col">duration</th>
        <th scope="col">titre</th>
        <th scope="col">description</th>
        <th scope="col">buttons</th>


      </tr>
    </thead>
    @foreach ($video as $item)
    <tbody>
      <tr>
        <th scope="row">{{$item->url}}</th>
        <td>{{$item->img}}</td>
        <td>{{$item->duration}}</td>
        <td>{{$item->titre}}</td>
        <td>{{$item->description}}</td>
        <td>        
          <button type="button" class="btn btn-danger w-75 mb-3">Delete</button>
          <button type="button" class="btn btn-warning w-75 mb-3
           ">Edit</button>
          <button type="button" class="btn btn-success w-75 ">Show</button></td>
      </tr>
      <tr>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection