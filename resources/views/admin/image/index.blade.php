@extends('layouts.admin_window')
@section('title',"Book Image Gallery")


@section('content')
<h2 class="input-group_image-gallery_title">{{$book->title}}</h2>
<hr>
<form class="forms-sample" role="form" action="{{route('admin.image.store',['bid'=>$book->id])}}" method="POST" enctype="multipart/form-data">
	@csrf

	<div class="input-group_image-gallery">
		<div class="input-group_items">
			<label class="gallery-title" for="exampleInputName1"><strong>
					Title</strong></label>
			<input type="text " class="form-control" name="title" placeholder="Title">
		</div>
		<div class="input-group_items">
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="inputGroupFile04">
				<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
			</div>
		</div>
		<div class="input-group_items">
			<button type="submit" class="btn btn-primary mr-2">Upload</button>
		</div>

	</div>

</form>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Book Image List</h3>
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
								<th>Title</th>
								<th>Image</th>
								<th>Update</th>
								<th>Delete</th>

							</tr>
						</thead>
						<tbody>
							@foreach($images as $rs)
							<tr>
								<td>{{$rs->id}}</td>
								<td>{{$rs->title}}</td>
								<td>
									@if($rs->image)
									<img src="{{Storage::url($rs->image)}}" style="height: 50px">
									@endif
								</td>
								<td>{{$rs->status}}</td>
								<td><a href="{{route('admin.category.update',['id'=>$rs->id])}}" class="btn btn-outline-success">UPDATE</a></td>
								<td><a href="{{route('admin.category.delete',['id'=>$rs->id])}}" class="btn btn-outline-danger" onclick="return confirm('Deleting!! Are you sure?')">DELETE</a></td>
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
@endsection