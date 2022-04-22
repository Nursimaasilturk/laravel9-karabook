@extends('layouts.admin')
@section('title', 'Add Category')
@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-6">
					<h1>Add Category</h1>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin">HOME</a></li>
						<li class="breadcrumb-item active">Add Category</li>
					</ol>
				</div>
			</div>
		</div> <!-- Container Fluid -->
	</section>

	<section class="content">
		<div class="add-category-form">
			<form role="form" action="/admin/category/store" method="post">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1" class="form-label">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Title">

				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="form-label">Keywords</label>
					<input type="text" class="form-control" name="keywords" placeholder="Keywords">

				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="form-label">Description</label>
					<input type="text" class="form-control" name="description" placeholder="Description">

				</div>

				<div class="form-group">
					<label for="exampleInputFile">Image</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image">
							<label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
						</div>
						<div class="input-group-append">
							<span class="input-group-text" id="">Upload</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select class="form-control" name="status">
						<option>True</option>
						<option>False</option>
						
					</select>
				</div>
				
				<div class="button-submit">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</section>

</div>
@endsection