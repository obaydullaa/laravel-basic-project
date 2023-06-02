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

	<div class="wrap-table shadow">
		<a class="btn btn-sm btn-primary mb-2" href="{{route('student.create')}}">Add New Student</a>
		<div class="card">
			<div class="card-body">
				<h2>All Students</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($all_data as $data )
							<tr>
								<td>{{$loop -> index + 1}}</td>
								{{-- <td>{{$data->id}}</td> --}}
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>{{$data->cell}}</td>
								<td><img src="{{url('')}}/media/students/{{$data->photo}}" alt=""></td>
								{{-- <td><img src="{{URL::to('')}}/media/students/{{$data->photo}}" alt=""></td> --}}
								{{-- <td><img src="{{asset('')}}media/students/{{$data->photo}}" alt=""></td> --}}
								<td>
									<a class="btn btn-sm btn-info" href="{{route('student.show')}}">View</a>
									<a class="btn btn-sm btn-warning" href="{{route('student.edit')}}">Edit</a>
									<a class="btn btn-sm btn-danger" href="#">Delete</a>
								</td>
							</tr>
							
						@endforeach
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>