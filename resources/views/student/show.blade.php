<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
	
	

	<div class="wrap shadow">
		<a class="btn btn-sm btn-primary mb-2" href="{{route('student.index')}}">Back</a>

		<div class="card">
			<div class="card-body">
				<h2>{{$user_data-> name}}</h2>
				<img class="mb-2" width="150px" src="{{URL::to('/')}}/media/students/{{$user_data->photo}}" alt="">
				<h2>{{$user_data-> name}}</h2>
				<p>{{$user_data-> cell}}</p>
			</div> 
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>