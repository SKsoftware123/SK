@extends('admin.admin_master')
@section('admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
        <section class="content">
		  <div class="row">
			<div class="col-12">
			 <div class="box">
					  <div class="box-header with-border">
						  <div class="row">
							  	<div class="col-lg-6">
							<h3 class="box-title">Slider</h3>
						</div>
						<div class="col-lg-6"><a href="{{route('slider.create')}}" class="btn btn-md btn-primary float-right">Add</a></h3></div>
						  </div>
						
					  </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S_No</th>
								<th>Title</th>
								<th>Subtitle</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                            </tr>    
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
      <!-- /.content -->
   </div>
</div>
<!-- /.content-wrapper -->
<!-- ./wrapper -->
@endsection