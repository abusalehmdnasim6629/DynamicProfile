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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Person detail</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-work-detail')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>


						  <div class="control-group">
							  <label class="control-label" for="fileInput">Work image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="work_image" id="fileInput" type="file">
							  </div>
							</div> 
				
        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Work Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="work_description" required="" rows="3"></textarea>
							  </div>
							</div>

							

    

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Person detail</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection