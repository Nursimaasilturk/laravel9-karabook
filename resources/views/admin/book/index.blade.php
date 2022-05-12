@extends('layouts.admin')
@section('title',"Book Panel")


@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-6">
					<a href="{{route('admin.book.create')}}" class="btn btn-outline-warning">Add Book</a>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
						<li class="breadcrumb-item active">Book List</li>
					</ol>
				</div>
			</div>
		</div> <!-- Container Fluid -->
	</section>

	<!-- MAİN CONTENT-->
	<section class=" content-list">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Book List</h3>
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
										<th>Category</th>
										<th>Title</th>
										<th>Author</th>
										<th>Image</th>
										<th>Status</th>
										<th>Edit</th>
										<th>Delete</th>
										<th>Show</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($data as $rs)
									<tr>
										<td>{{$rs->id}}</td>
										<td>{{CategoryController::getParentsTree($rs,$rs->title)}}</td>
										<td>{{$rs->title}}</td>
										<td>{{$rs->author}}</td>
										<td>
											@if ($rs->image)
											<img src="{{Storage::url($rs->image)}}" style="height:40px">
											@endif
										</td>
										<td>{{$rs->status}}</td>
										<td><a href="{{route('admin.book.edit',['id'=>$rs->id])}}" class="btn btn-outline-success">EDİT</a></td>
										<td><a href="{{route('admin.book.delete',['id'=>$rs->id])}}" class="btn btn-outline-danger"
										onclick="return confirm('Deleting!! Are you sure?')">DELETE</a></td>
										<td><a href="{{route('admin.book.show',['id'=>$rs->id])}}" class="btn btn-outline-primary">SHOW</a</td>
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