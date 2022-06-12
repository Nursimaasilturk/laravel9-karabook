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
					<h1>Add Faq</h1>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
						<li class="breadcrumb-item active">Add Faq</li>
					</ol>
				</div>
			</div>
		</div> <!-- Container Fluid -->
	</section>

	<section class="container">
		<div class="card">
			<div class="card-body">
				
				<p class="card-description">
				
				</p>
				<form class="forms-sample" role="form" action="{{route('admin.faq.store')}}" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<label for="exampleInputName1">question</label>
						<input type="text " class="form-control" name="question" placeholder="question">
					</div>

					<div class="form-group">
						<label for="exampleInputName1">answer</label>
						<input type="text " class="form-control" name="answer" placeholder="answer">
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Status</label>
						<select class="form-control form-control-lg" name="status">
							<option value="1">True</option>
							<option value="2">False</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary mr-2">Save</button>
				</form>
			</div>
		</div>
	</section>

</div>
@endsection