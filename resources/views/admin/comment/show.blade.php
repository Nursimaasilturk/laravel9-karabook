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
				<h3 class="card-titlet text-center">Comment Detail</h3>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="table-wrap">
							<table class="table table-hover ">
								<thead class="thead-primary">
								<tbody>

									<tr>
										<td>Id</td>
										<td>{{$comment->id}}</td>
									</tr>
									<tr>
										<td>Rate</td>
										<td>{{$comment->rate}}</td>
									</tr>
									<tr>
										<td>Subject</td>
										<td>{{$comment->subject}}</td>
									</tr>
									<tr>
										<td>Comment</td>
										<td>{{$comment->comment}}</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="exampleFormControlSelect1">Status</label>
										</td>
										<td>
										<form action="{{route('admin.comment.update',['id'=>$comment->id])}}" method="post">
											@csrf
											<select class="form-control " name="status" value="{{$comment->status}}">
														<option value="1" @if($comment->status==1) selected @endif> YENI</option>
														<option value="0" @if($comment->status==0) selected @endif > OKUNDU </option>
											</select>
											<button type="submit" class="btn btn-primary mt-2">Save</button>
										</form>
										</td>
									</tr>
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