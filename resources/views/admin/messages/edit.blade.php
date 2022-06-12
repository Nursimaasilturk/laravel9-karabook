@extends('layouts.admin')
@section('title', 'Edit  Message')
@section('content')
<!-- Content Wrapper, Contain Page Content-->
<div class="content-wrapper">
	<!-- Content Header, Contain Page Header-->

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col sm-6">
					<h1>Edit Message:{{$message->subject}}</h1>
				</div>
				<div class="col sm-6">
					<ol class=" breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">HOME</a></li>
						<li class="breadcrumb-item active">Edit Message</li>
					</ol>
				</div>
			</div>
		</div> <!-- Container Fluid -->
	</section>

	<section class="container">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Category Elements</h4>
				<p class="card-description">
					 
				</p>
				<form class="forms-sample" role="form" action="{{route('admin.messages.update',['id'=>$message->id])}}" method="post" enctype="multipart/form-data">
					@csrf
				
					<div class="form-group">
						<label for="exampleFormControlSelect1">Status</label>
						<select class="form-control form-control-lg" name="status">
							<option value="{{$message->status}}" >{{$message->status=='True'?'Bekliyor':'Incelendi'}}</option>
							<option value="False">Incelendi</option>
							<option value="True">Beklet</option>
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