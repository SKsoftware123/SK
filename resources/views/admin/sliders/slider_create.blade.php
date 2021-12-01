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
                        <h4 class="box-title">Create Setting</h4>
                     </div>
					    <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<!-- phone mask -->
								<div class="form-group">
									<label>Title</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-address-card"></i>
											</div>
											<input type="text" class="form-control" name="title">
										</div>
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<div class="form-group">
									<label>Subtitle</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-phone"></i>
											</div>
											<input type="text" class="form-control " name="subtitle">
                                    </div>
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- /.form group -->
								<div class="form-group">
									<label>Image</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</div>
											<input type="file" class="form-control" name="image">
										</div>
                                        @error('image')
													<div ><span class="text text-danger">{{ $message }}</span></div>
										@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
                                <div class="form-group" style="padding-bottom:40px">
								<input type="submit" class="btn btn-rounded btn-info pull-right mt-5 mb-5" value="submit"> 
								</div>
							</div>
					   </form>
                  </div>
               </div>
            </div>
       
         <!-- /.row -->
      </section>
      <!-- /.content -->
   </div>
</div>
<!-- /.content-wrapper -->
<!-- ./wrapper -->
@endsection