@extends('frontend.layouts.master')
@section('title','Login')

@push('css')
@endpush
@section('content')

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<br>
						<br>
						<div class="wrap-login-item ">
							@if(session()->has('message'))
							<div class="alert alert-success">
							  {{ session()->get('message') }}
							</div>
						  @endif
							<div class="login-form form-item form-stl">
								<h2 class="text-muted" style="text-align: center">Đăng nhập tài khoản của bạn</h2>		
								<form name="frm-login" method="POST" action="{{route('login')}}">
									@csrf
								
									<div class="form-group">
										<label for="email">Email:</label>
										<br>
										<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Nhập email của bạn" :value="old('email')" required autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   		 @enderror
									</div>
									<div class="form-group">
										<label for="pwd">Mật khẩu:</label>
										<br>
										<input type="password" id="frm-login-pass" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="**********" required autocomplete="current-password" >
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   <div>
									<br>
									<div class="form-group form-check">
										<label class="form-check-label">
											<input class="frm-input " name="remember" id="remember" value="forever" type="checkbox"><span>Nhớ mật khẩu</span>
										</label>
										<a class="link-function left-position" href="{{route('password.email')}}" title="Forgotten password?">Quên mật khẩu ?</a>
									</div>
									<input type="submit" class="btn btn-primary" value="Đăng nhập" name="submit" style="margin-left:220px;width:100px" >
									
									</div>
								</form>
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

</div><!--end container-->>
@endsection