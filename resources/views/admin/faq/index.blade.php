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
				<h3 class="card-title">Faq List</h3>
			</div>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						
					</div>
				</div>
				<a href="{{route('admin.faq.create')}}" class="btn btn-primary">Add Faq</a>
				<div class="row">
					<div class="col-md-12">
						
						<div class="table-wrap">
							<table class="table">
								<thead class="thead-primary">
									<tr>
										<th>ID</th>
										<th>question</th>
										<th>answer</th>
										<th>status</th>
										<th>actions</th>
																			
									</tr>
								</thead>
								<tbody>
									@foreach($faqList as $rs)
									<tr>
										<td>{{$rs->id}}</td>
										<td>{{$rs->question}}</td>
										<td>{{$rs->answer}}</td>
										<td>{{$rs->status}}</td>
										
									
										<td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-outline-success">EDİT</a>
									<a href="{{route('admin.faq.delete',['id'=>$rs->id])}}" class="btn btn-outline-danger"
										onclick="return confirm('Deleting!! Are you sure?')">DELETE</a>
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