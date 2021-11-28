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
							       <h3 class="box-title">Menu</h3>
						         </div>
						  </div>
					  </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S_No</th>
								<th>Address</th>
								<th>Email</th>
                                <th>Facebook</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key=>$datas)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$datas->address}}</td>
								<td>{{$datas->email}}</td>
								<td>{{$datas->facebook}}</td>
								<td><a href="{{route('setting.edit',$datas->id)}}" ><i class="fa fa-edit" style="color:blue"></i></a> 
							</tr>
							@endforeach
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