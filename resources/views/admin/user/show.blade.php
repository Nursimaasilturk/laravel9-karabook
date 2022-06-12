@extends('layouts.admin')
@section('title',"Messages Panel")


@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- MAİN CONTENT-->
	<section class=" content-list">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-titlet text-center">USER DATA</h3>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="table-wrap">
							<table class="table table-hover ">
								<thead class="thead-primary">
								<tbody>

									<tr>
										<td>Id</td>
										<td>{{$user->id}}</td>
									</tr>
									<tr>
										<td>name</td>
										<td>{{$user->name}}</td>
									</tr>
									<tr>
										<td>email</td>
										<td>{{$user->email}}</td>
									</tr>
									<tr>
										<td>User Roles</td>
										<td>
											@foreach($user->roles as $role)
												{{$role->name}}
											@endforeach
										</td>
									</tr>
									<tr>
										<td>Add Role</td>
										<td>
										<form action="{{route('admin.user.addrole',['id'=>$user->id])}}" method="post">
											@csrf
											<select class="form-control " name="role_id">
												@foreach($roles as $role)
													<option value="{{$role->id}}">{{$role->name}}</option>
												@endforeach
											</select>
											<button type="submit" class="btn btn-primary mt-2">Add Role</button>
										</form>
										</td>
									</tr>
									
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