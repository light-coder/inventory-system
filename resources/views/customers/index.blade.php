@extends ('layouts.app')


    @section('content')

      
<div id="container">
  <div class="row">
    <div class="col-sm">
      <h3>Customers</h3>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($customers as $customer)
  	<tr>
  <td>{{$customer->id}}</td>
  <td><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></td>
  <td>{{$customer->number}}</td>
</tr>
  @endforeach
  </tbody>
</table>

    </div>
    <div class="col-sm-3">
    <h3>Add a Customer</h3>
<form method="POST" action="/customers">

  @csrf

  <div class="form-group">
    <label for="title">Name</label>

    <input type="text" class="form-control" id="name"  placeholder="Customers Name" name="name" required>

  </div>

<div class="form-group">
    <label for="title">Address</label>

    <input type="text" class="form-control" id="adress"  placeholder="Address" name="address" required>

  </div>
  <div class="form-group">

    <label for="price">Phone Number</label>

    <input type="text" class="form-control" id="number" placeholder="Phone Number" name="number" required>

  </div>

  <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>

  
  </div>
       
   @endsection