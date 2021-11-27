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
                        <h4 class="box-title">Update Menu</h4>
                     </div>
					    <form method="post" action="{{route('menu.update',$data->id)}}">
							@csrf
							<div class="box-body">
								<!-- phone mask -->
								<div class="form-group">
									<label>Menu Name</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user"></i>
											</div>
											<input type="text" value="{{$data->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
										</div>
											@error('name')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- phone mask -->
								<div class="form-group">
								<label>Menu status</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-compass"></i>
									</div>
									<select class="form-control" name="status">
										<option value="1" @if($data->status == '1') ? selected : null @endif>Active</option>
										<option value="0" @if($data->status == '0') ? selected : null @endif>Inactive</option>
									</select>
								</div>
								<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- IP mask -->
								<div class="form-group">
									<label>Menu Link</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-link"></i>
										</div>
										<input type="text" value="{{$data->link}}" class="form-control @error('link') is-invalid @enderror" name="link">
										
									</div>
										@error('link')
											<div ><span class="text text-danger">{{ $message }}</span></div>
								        @enderror
								<!-- /.input group -->
								</div>

								<div class="form-group ">
								<input type="submit" class="btn btn-rounded btn-info pull-right mt-5 mb-5" value="Update"> 
								</div>
								
								<!-- /.form group -->
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