@extends ('layouts.app')


    @section('content')

      
<div id="container">
  <div class="row">
    <div class="col-sm">
      <h3>PRODUCTS</h3>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($products as $product)
  	<tr>
  <td>{{$product->id}}</td>
  <td><a href="/products/{{$product->id}}">{{$product->name}}</a></td>
  <td>{{$product->price}}</td>
</tr>
  @endforeach
  </tbody>
</table>

    </div>
    <div class="col-sm-3">
    <h3>Create a product</h3>
<form method="POST" action="{{route('products.store')}}">

  @csrf

  <div class="form-group">
    <label for="title">Title</label>

    <input type="text" class="form-control" id="title"  placeholder="Product Title" name="name" required>

  </div>

  <div class="form-group">

    <label for="price">Price</label>

    <input type="text" class="form-control" id="price" placeholder="Product Price" name="price" required>

  </div>

  <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>

  
  </div>
       
   @endsection