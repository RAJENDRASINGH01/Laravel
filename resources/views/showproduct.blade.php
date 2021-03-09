<!DOCTYPE html>
<html>
<head>
	<title>show product</title>
	<!--icon link-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-info">Show product</h1>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">product price</th>
      <th scope="col">product quantity</th>
      <th scope="col">product description</th>
      <th scope="col">product image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($showdata as $s)
   <tr>
   	<td>{{$s->product_name}}</td>
   	<td>{{$s->product_pcice}}</td>
   	<td>{{$s->product_quantity}}</td>
   	<td>{{$s->product_description}}</td>
   	<td><img src="{{asset('uploads/products')}}/{{$s->product_image}}" width="50"></td>
   
   <td><a href=""><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
   	<a href="" onclick="return confirm('are you sure?')"><button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a></td>
   </tr>
   @endforeach
  </tbody>
</table>
	</div>

</body>
</html>