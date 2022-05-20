@extends('layouts.admin')
@section('title', 'Show Book:'.$data->title)
@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-3">
					<a href="{{route('admin.book.edit',['id'=>$data->id])}}" class="btn btn-outline-warning" style="width:200px;">Edit</a>
				</div>
				<div class="col sm-3">
					<a href="{{route('admin.book.delete',['id'=>$data->id])}}" class="btn btn-outline-primary"  style="width:200px;"
					onclick="return confirm('Deleting!! Are you sure?')">Delete</a>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
						<li class="breadcrumb-item active">Show Book</li>
					</ol>
				</div>
			</div>
		</div> <!-- Container Fluid -->
	</section>

	<section class="container">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title" style="color:blue;">Detail Data</h4>
					<p class="card-description">
						
					</p>
					<div class="table-responsive pt-3">
						<table class="table table-bordered">
							<tr class="tr-items">
								<th class="tr-items-title" style="width: 150px;">Id</th>
								<td>{{$data->id}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Category</th>
								<td>
								{{ \App\Http\Controllers\CategoryController::getParentsTree($data->category,$data->category->title) }}
								</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Title</th>
								<td>{{$data->title}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Description</th>
								<td>{{$data->description}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Keywords</th>
								<td>{{$data->keywords}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Details</th>
								<td>{{$data->detail}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Authors</th>
								<td>{{$data->author}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Image</th>
								<td> 
									@if ($data->image)
											<img src="{{Storage::url($data->image)}}" style="height:40px">
											@endif
								</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Status</th>
								<td>{{$data->status}}</td>
							</tr>
							<tr class="tr-items"> 
								<th class="tr-items-title">Created Date</th>
								<td>{{$data->created_at}}</td>
							</tr>
							<tr class="tr-items">
								<th class="tr-items-title">Update Date</th>
								<td>{{$data->updated_at}}</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection