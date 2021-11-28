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
					    <form method="post" action="{{route('setting.store')}}">
							@csrf
							<div class="box-body">
								<!-- phone mask -->
								<div class="form-group">
									<label>Address</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-address-card"></i>
											</div>
											<input type="text" class="form-control" name="address">
										</div>
											@error('address')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<div class="form-group">
									<label>Phone</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-phone"></i>
											</div>
											<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
										</div>
											@error('phone')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- /.form group -->
								<div class="form-group">
									<label>Email</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</div>
											<input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
										</div>
											@error('email')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<div class="box-header with-border">
                        		<p class="box-title" style="font-size: 16px;">Social Icons</p>
                    		 </div>
							 <div class="box-body">
								<!-- phone mask -->
								<div class="form-group">
									<label>Facebook</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-facebook-square"></i>
											</div>
											<input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook">
										</div>
											@error('facebook')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<div class="form-group">
									<label>Instagarm</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-instagram"></i>
											</div>
											<input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram">
										</div>
											@error('instagram')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- /.form group -->
								<div class="form-group">
									<label>Gmail</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-google"></i>
											</div>
											<input type="text" class="form-control @error('gmail') is-invalid @enderror" name="gmail">
										</div>
											@error('gmail')
													<div ><span class="text text-danger">{{ $message }}</span></div>
											@enderror
										<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<div class="form-group" style="padding-bottom:40px">
								<input type="submit" class="btn btn-rounded btn-info pull-right mt-5 mb-5" value="submit"> 
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