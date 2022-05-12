@extends('layouts.admin')
@section('title', 'Add Book')
@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-6">
					<h1>Add Book</h1>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
						<li class="breadcrumb-item active">Add Book</li>
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
					Basic form elements
				</p>
				<form class="forms-sample" role="form" action="{{route('admin.book.store')}}" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<label>Parent Category</label>
						<select class="form-control select2" name="parent_id">
							@foreach($data as $rs)
								<option value="{{$rs->id}}" >{{ \App\Http\Controllers\CategoryController::getParentsTree($rs,$rs->title) }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputName1">Title</label>
						<input type="text " class="form-control" name="title" placeholder="Title">
					</div>

					<div class="form-group">
						<label for="exampleInputName1">Description</label>
						<input type="text " class="form-control" name="description" placeholder="Description">
					</div>

					<div class="form-group">
						<label for="exampleInputName1">Keywords</label>
						<input type="text " class="form-control" name="keywords" placeholder="Keywords">
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Details</label>
						<textarea class="form-control"  name="detail" cols="30" rows="10">

						</textarea>
					
					</div>
					<div class="form-group">
						<label for="exampleInputName1">Authors</label>
						<input type="text " class="form-control" name="author" placeholder="Authors">
					</div>
					
					<div class="mb-3">
							<label for="formFile">Choose Image</label>
						<input class="form-control" type="file" id="formFile" name="image">
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Status</label>
						<select class="form-control form-control-lg" name="status">
							<option value="1">True</option>
							<option value="2">False</option>
						</select>
					</div>

					<button type="submit" class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-light">Cancel</button>
				</form>
			</div>
		</div>
	</section>

</div>
@endsection