
@extends ('layouts.app')


    @section('content')

      
<div id="container">
  <div class="row">
    <div class="col-sm">
      <h3>Sales</h3>

      
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Details</th>
      <th scope="col">Issue</th>
      <th scope="col">Reciept</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sales as $sales)
    <tr>
  <td>{{ $sales->id}}</td>    
  <td>{{ $sales->product->name}}</td>
  <td>{{$sales->customer->name}}</td>
  <td>{{$sales->issue}}</td>
  <td>{{$sales->recipt}}</td>
  <td>{{$sales->product->price}}</td>
  <td>{{$sales->amount}}</td>
</tr>
  @endforeach
  </tbody>
</table>

    </div>
    <div class="col-sm-3">
    <h3>Create a sales</h3>
<form method="POST" action="/inventories">

  @csrf

  <div class="form-group">
    <label for="title">Title</label>

    <input type="text" class="form-control" id="title"  placeholder="sales Title" name="title" required>

  </div>

  <div class="form-group">

    <label for="price">Price</label>

    <input type="text" class="form-control" id="price" placeholder="sales Price" name="price" required>

  </div>

  <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>

  
  </div>
       
   @endsection