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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add CV</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-cv')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>

							


							<div class="control-group">
							  <label class="control-label" for="fileInput">Upload CV</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="cv" id="fileInput" type="file">
							  </div>
							</div> 

    

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Upoad CV</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection