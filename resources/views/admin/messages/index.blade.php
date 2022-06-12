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
				<h3 class="card-title">Messages List</h3>
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
										<th>ip</th>
										<th>Subject</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Message</th>
										<th>Actions</th>										
									</tr>
								</thead>
								<tbody>
									@foreach($messageList as $rs)
									<tr>
										<td>{{$rs->id}}</td>
										<td>{{$rs->ip}}</td>
										<td>{{$rs->subject}}</td>
										<td>{{$rs->name}}</td>
										<td>{{$rs->email}}</td>
										<td>{{$rs->phone}}</td>
										<td>{{$rs->message}}</td>
									
										<td><a href="{{route('admin.messages.edit',['id'=>$rs->id])}}" class="btn btn-outline-success">EDİT</a>
									<a href="{{route('admin.messages.delete',['id'=>$rs->id])}}" class="btn btn-outline-danger"
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