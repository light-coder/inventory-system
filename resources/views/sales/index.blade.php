
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

  </tbody>
</table>

    </div>

 <div class="col-sm-3">
    <h3>Create a sales</h3>

<form method="POST" action="/sales">

  @csrf



  <div class="form-group">
    <label for="title">customer</label>

      <select id="customer_id" class="form-control" name="customer_id" placeholder="select customer" required>
  @foreach($customers as $customers)
    <option value="{{$customers->id}}">{{$customers->name}}</option>
  @endforeach
</select>

  </div>
 <div class="form-group">
 <label for="title">Produuct</label>

      <select id="product_id" class="form-control" name="product_id" placeholder="select product" required>
  @foreach($products as $product)
    <option value="{{$product->id}}">{{$product->name}}</option>
  @endforeach
</select>

  </div>
  <div class="form-group">

    <label for="price">Quantity</label>

    <input type="number" class="form-control" id="issue" placeholder="Quantity" name="issue" required>

  </div>


  <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
  
  </div>
       
   @endsection