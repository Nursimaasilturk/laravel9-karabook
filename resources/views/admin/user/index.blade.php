@extends('layouts.admin')
@section('title',"User Panel")


@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- MAİN CONTENT-->
	<section class=" content-list">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">User List</h3>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<div class="table-wrap">
							<table class="table">
								<thead class="thead-primary">
									<tr>
										<th>ID</th>
										<th>email</th>
										<th>roles</th>
										<th>Name</th>
										<th>Photo</th>
										<th>Phone</th>
										<th>Message</th>
										<th>Actions</th>										
									</tr>
								</thead>
								<tbody>
									@foreach($userList as $rs)
									<tr>
										<td>{{$rs->id}}</td>
										<td>{{$rs->email}}</td>
										<td>
											@foreach($rs->roles as $role)
												{{$role->name}},
											@endforeach
										</td>
										<td>{{$rs->name}}</td>
										<td><img src="{{Storage::url($rs->img)}}" width="40"></td>
										<td>{{$rs->phone}}</td>
										<td>{{$rs->message}}</td>
										<td>
						<a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-outline-primary">SHOW</a>
						<a href="{{route('admin.user.delete',['id'=>$rs->id])}}" class="btn btn-outline-danger"
										onclick="return confirm('Deleting!! Are you sure?')">DELETE</a>
									</tr>	
									
									@endforeach								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--/.card -->
		</div>
	</section>
</div>
@endsection