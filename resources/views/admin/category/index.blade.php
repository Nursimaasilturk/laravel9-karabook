@extends('layouts.admin')
@section('title',"Category Panel")


@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-6">
					<h1>Category List</h1>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin">HOME</a></li>
						<li class="breadcrumb-item active">Category List</li>
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
				<h3 class="card-title">Category List</h3>
			</div>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Table #03</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="text-center mb-4">Create Your Domain Name</h4>
						<div class="table-wrap">
							<table class="table">
								<thead class="thead-primary">
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Keywords</th>
										<th>Description</th>
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
										<td>{{$rs->title}}</td>
										<td>{{$rs->keywords}}</td>
										<td>{{$rs->description}}</td>
										<td>{{$rs->image}}</td>
										<td>{{$rs->status}}</td>
										<td><a href="/admin/category/edit{{$rs->id}}" class="btn btn-outline-success">EDİT</a></td>
										<td><a href="/admin/category/delete{{$rs->id}}" class="btn btn-outline-danger">DELETE</a</td>
										<td><a href="/admin/category/show{{$rs->id}}" class="btn btn-outline-primary">SHOW</a</td>
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