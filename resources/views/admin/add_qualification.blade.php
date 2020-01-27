@extends('admin_layout')
@section('admin_content')

  
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Person Detail</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
                
                <p class="alert-success">
                   <?php
                     
                   
                   ?>
                </p>
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Qualification detail</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-qualification-detail')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Degree</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="degree" required="" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date02">Institution</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="institution" required="" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date03">CGPA</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="cgpa" required="" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date03">Passing year</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="year" required="" >
							  </div>
							</div>
        
							
    

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Person qualification</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection