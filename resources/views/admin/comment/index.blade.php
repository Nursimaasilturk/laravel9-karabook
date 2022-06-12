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
				<h3 class="card-title text-center" >Comment List</h3>
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
										<th>rate</th>
										<th>user</th>
										<th>subject</th>
										<th>comment</th>
										<th>actions</th>
																			
									</tr>
								</thead>
								<tbody>
									@foreach($commentList as $rs)
									<tr>
										<td>{{$rs->id}}</td>
										<td>{{$rs->rate}}</td>
										<td>{{$rs->user->name}}</td>
										<td>{{$rs->comment}}</td>
										<td>{{$rs->subject}}</td>
										<td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-outline-info">Show</a>
									<a href="{{route('admin.comment.delete',['id'=>$rs->id])}}" class="btn btn-outline-danger"
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