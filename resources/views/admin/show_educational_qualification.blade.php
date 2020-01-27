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
								  <th>Id</th>
								  <th>Degree</th>
                                  <th>Institute</th>
                                  <th>CGPA</th>
                                  <th>Passing year</th>
								  <th>Action</th>
							  </tr>
						  </thead>   

						@foreach($result1 as $p)
						  <tbody>
							<tr>
								<td>{{ $p->personQualification_id}}</td>
								<td class="center">{{ $p->personQualification_degree}}</td>
								<td class="center">{{ $p->personQualification_institute}}</td>
                                <td class="center">{{ $p->personQualification_cgpa}}</td>
								<td class="center">{{ $p->personQualification_passing_year}}</td>
                                
								<td class="center">
                                
									<a class="btn btn-danger" href="{{URL::to('/delete-eq/'.$p->personQualification_id)}}">
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