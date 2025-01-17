@extends('admin.master-admin')
@section('content')
<script src="/adminjs/jquery2.0.3.min.js"></script>
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
	<section id="container">
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>Danh Sách Sản Phẩm <span id="getTotal"></span>
									</h3>
									
										
								</header>
								<div class="panel-body">
									<div class="col-md-12">
										<form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
											@csrf
											@method('PUT')
											<div class="form-group row">
												@if(count($errors)>0)
												<div class="alert alert-danger">
													@foreach($errors->all() as $err)
													{{$err}}<br>
													@endforeach
												</div>
												@endif
												@if(Session::has('thanhcong'))
												<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
												@endif
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
												<div class="col-sm-10">
													<input type="text" name="name" class="form-control"  placeholder="" value="{{$product->name}}">
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Loại</label>
												<div class="col-sm-10">
													<SELECT class="form-control" name="type">
														@foreach($product_types as $product_type)
														<option value="{{$product_type->id}}" @if($product->id_type==$product_type->id) selected @endif >{{$product_type->name}}</option>
														@endforeach
													</SELECT>
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Hãng</label>
												<div class="col-sm-10">
													<SELECT class="form-control" name="company">
														@foreach($companies as $company)
														<option value="{{$company->id}}" @if($product->id_company==$company->id) selected @endif>{{$company->name}}</option>
														@endforeach
													</SELECT>
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Mô Tả</label>
												<div class="col-sm-10">
													<textarea name="description" class="form-control">{{$product->description}}</textarea>
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Giá</label>
												<div class="col-sm-10">
													<input type="text" name="unit_price" class="form-control"  placeholder="" value="{{$product->unit_price}}">
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Giá Khuyến Mãi</label>
												<div class="col-sm-10">
													<input type="text" name="promotion_price" class="form-control"  placeholder="" value="{{$product->promotion_price}}">
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Tình Trạng</label>
												<div class="col-sm-10">
													<SELECT class="form-control" name="new">
														
														<option value="1" @if($product->new==1) selected @endif>Mới</option>
														<option value="0" @if($product->new==0) selected @endif>Cũ</option>
													</SELECT>
												</div>
											</div>
											<div class="form-group row">
												<label  class="col-sm-2 col-form-label">Hình Ảnh</label>
												<div class="col-sm-10">
													<input type="file" name="image" class="form-control" placeholder="" >
													<img src="/image/product/{{$product->image}}" width="100px" height="100px"/>
												</div>
											</div>


											<div class="form-group row">
												<div  align="center">
													<input type="submit" class="btn btn-primary" value="Nhập">
													<a href="{{route('product.index')}}" class="btn btn-primary">Quay Lại</a>
												</div>

											</div>
										</form>

									</div>
								</div>
							</div>
						</div>
						
				<!--//agileinfo-grap-->
				</div>
			</div>
		</div>
		
		
	</section>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <!-- <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>

@endsection