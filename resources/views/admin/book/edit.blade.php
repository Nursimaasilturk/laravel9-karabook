@extends('layouts.admin')
@section('title', 'Edit Book:'.$data->title)
@section('head')
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-6">
					<h1>Edit Book:{{$data->title}}</h1>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
						<li class="breadcrumb-item active">Edit Book</li>
					</ol>
				</div>
			</div>
		</div> <!-- Container Fluid -->
	</section>

	<section class="container">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Book Elements</h4>
				<p class="card-description">
					
				</p>
				<form class="forms-sample" role="form" action="{{route('admin.book.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Category Name</label>
						<select class="form-control select2" name="category_id">
							@foreach($datalist as $rs)
							<option value="{{$rs->id}}"  >{{ \App\Http\Controllers\CategoryController::getParentsTree($rs,$rs->title) }}</option>
							@endforeach
						</select>
					</div>	
					<div class="form-group">
						<label for="exampleInputName1">Title</label>
						<input type="text " class="form-control" name="title" value="{{$data->title}}">
					</div>

					<div class="form-group">
						<label for="exampleInputName1">Description</label>
						<input type="text " class="form-control" name="description" value="{{$data->description}}">
					</div>

					<div class="form-group">
						<label for="exampleInputName1">Keywords</label>
						<input type="text " class="form-control" name="keywords" value="{{$data->keywords}}">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Details</label>
						<textarea class="textarea" id="detail" name="detail" cols="30" rows="10">
							{{$data->detail}}
						</textarea>
					
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Authors</label>
						<input type="text " class="form-control" name="author" value="{{$data->author}}">
					</div>
					<div class="mb-3">
							<label for="formFile">Choose Image</label>
						<input class="form-control" type="file" id="formFile" name="image">
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Status</label>
						<select class="form-control form-control-lg" name="status">
							<option value="{{$data->status}}"  selected>{{$data->status==1?"True":"False"}}</option>
							<option value="1">True</option>
							<option value="2">False</option>
						</select>
					</div>

					<button type="submit" class="btn btn-primary mr-2">Update Data</button>
					<button class="btn btn-light">Cancel</button>
				</form>
			</div>
		</div>
	</section>

</div>
@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(function() {
        $('.textarea').summernote();
    });
  </script>
@endsection