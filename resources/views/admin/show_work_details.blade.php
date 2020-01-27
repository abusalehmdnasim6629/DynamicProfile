@extends('admin_layout')
@section('admin_content')

           <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Person Detail</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Work id</th>
                                  <th>Work image</th>
                                  <th>Work description</th>
								  <th>Action</th>
							  </tr>
						  </thead>   

						@foreach($result as $p)
						  <tbody>
							<tr>
								<td>{{ $p->work_id}}</td>
								
								<td><img src="{{URL::to($p->work_image)}}" alt="work image" style="height:70px; width:70px"> </td>
								<td class="center">{{ $p->work_description}}</td>
                                
                                
								<td class="center">
                                
									<a class="btn btn-danger" href="{{URL::to('/delete-work/'.$p->work_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
						  </tbody>

						@endforeach

					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection