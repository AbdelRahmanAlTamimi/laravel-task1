@extends("layouts.app")
@section("title") index @endsection

@section("content") 

<div class="container mt-5">
   
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      
    </tr>
  </thead>
  <tbody>
    
   @foreach ($products as $product)
    <tr>
      
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->description}}</td>    
      
      
      
      
    </tr>
@endforeach
   
   
    
  </tbody>
</table>
</div>



@endsection
