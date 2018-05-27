
@extends ('layouts.app')


    @section('content')

      
<div id="container">
  <div class="row">
    <div class="col-sm">
      <h3>inventories</h3>

      
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Details</th>
      <th scope="col">Issue</th>
      <th scope="col">Reciept</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($inventory as $item)

<tr>

    <td>{{$item->product->name}}</td>
    @if($item->customer_id)
     <td>{{$item->customer->name}}</td>
     @else
     <td>{{$item->details}}</td>
     @endif
     <td>{{$item->issue}}</td>
     <td>{{$item->reciept}}</td>
     <td>{{$item->product->price}}</td>
      
      @if($item->issue)
     <td>{{$item->issue * $item->product->price}}</td>
     @else
     <td>{{$item->reciept * $item->product->price}}</td>
     @endif
     <td>{{$item->created_at}}</td>

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
    <label for="title">Details</label>

   <input type="text" class="form-control" id="details" placeholder="details" name="details" required>

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

    <input type="number" class="form-control" id="reciept" placeholder="Quantity" name="reciept" required>

  </div>
  <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
       
   @endsection