@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">Profile</div>
					</div>
				</div>	
				<div class="panel-body">
					<div class="row">
						<!-- left column -->
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="text-center">
							<img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
							</div>
						</div>

						<!-- edit form column -->
						<div class="col-md-8 col-sm-6 col-xs-6 personal-info">
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/updateInfo') }}">
								{{ csrf_field() }}
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="col-md-4 control-label">Name</label>

									<div class="col-md-6">
										<label for="email" class="control-label info">
											<p class="text-info">{{ $user->name }}</p>
										</label>
										<input id="name" type="text" class="form-control info-input" name="name" value="{{ $user->name }}" required autofocus>

										@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
								</div>

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="col-md-4 control-label">E-Mail Address</label>

									<div class="col-md-6">
										<label for="email" class="control-label info">
											<p class="text-info">{{ $user->email }}</p>
										</label>
										<input id="email" type="email" class="form-control info-input" name="email" value="{{ $user->email }}">

										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
									<label for="company" class="col-md-4 control-label">Company</label>

									<div class="col-md-6">
										<label for="company" class="control-label info">
											<p class="text-info">{{ $user->company }}</p>
										</label>
										<input id="company" type="company" class="form-control info-input" name="company" value="{{ $user->company }}">

										@if ($errors->has('company'))
											<span class="help-block">
												<strong>{{ $errors->first('company') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
									<label for="city" class="col-md-4 control-label">city</label>

									<div class="col-md-6">
										<label for="city" class="control-label info">
											<p class="text-info">{{ $user->city }}</p>
										</label>
										<input id="city" type="city" class="form-control info-input" name="city" value="{{ $user->city }}">

										@if ($errors->has('city'))
											<span class="help-block">
												<strong>{{ $errors->first('city') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
									<label for="phone" class="col-md-4 control-label">phone</label>

									<div class="col-md-6">
										<label for="phone" class="control-label info">
											<p class="text-info">{{ $phone1 }}-{{ $phone2 }}-{{ $phone3 }}-{{ $phone4 }}</p>
										</label>
										<input id="phone" type="phone1" class="form-control info-input" name="phone" maxlength="11" value="{{ $user->phone }}">
							

										@if ($errors->has('phone'))
											<span class="help-block">
												<strong>{{ $errors->first('phone') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-xs-4">
									</div>
									<div class="col-lg-8 col-xs-8">
										<div class="row">
											<div class="col-lg-6 col-xs-6"></div>
											<div class="col-lg-6 col-xs-6">
												<button type="submit button" class="btn profile-btn save-info-edit">
													<span class="glyphicon glyphicon-ok glyphicon-sizing"></span>&nbsp;
												</button>
												<button type="button" class="btn profile-btn info-edit">
													<span class="glyphicon glyphicon-pencil glyphicon-sizing"></span>&nbsp;
												</button>
												<button type="button" class="btn profile-btn cancel-info-edit btn-margin">
													<span class="glyphicon glyphicon-remove glyphicon-sizing"></span>&nbsp;
												</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Description</div>
				<div class="panel-body">

					<div class="row">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/updateDescription') }}">
							{{ csrf_field() }}
							<div class="col-lg-12 col-xs-12 text-body">
								<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
									<textarea id="description" type="description" class="form-control description-input" name="description" maxlength="244" value="{{ $user->description }}"></textarea> 
									<div class="description col-lg-12 col-xs-12">
										{{ $user->description }}
									</div>

									@if ($errors->has('description'))
										<span class="help-block">
											<strong>{{ $errors->first('description') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="col-lg-4 col-xs-4"></div>
							<div class="col-lg-8 col-xs-8">
								<div class="row">
									<div class="col-lg-6 col-xs-6"></div>
									<div class="col-lg-6 col-xs-6">
										<button type="submit button" class="btn profile-btn save-description-edit">
											<span class="glyphicon glyphicon-ok glyphicon-sizing"></span>&nbsp;
										</button>
										<button type="button" class="btn profile-btn description-edit">
											<span class="glyphicon glyphicon-pencil glyphicon-sizing"></span>&nbsp;
										</button>
										<button type="button" class="btn profile-btn cancel-description-edit btn-margin">
											<span class="glyphicon glyphicon-remove glyphicon-sizing"></span>&nbsp;
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Profolio</div>
				<div class="panel-body">

					<div class="row">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/updateProfolio') }}">
							{{ csrf_field() }}
							<div class="col-lg-12 col-xs-12 text-body">
								<div class="form-group{{ $errors->has('profolio') ? ' has-error' : '' }}">
									<textarea id="profolio" type="profolio" class="form-control profolio-input" name="profolio" maxlength="244" value="{{ $user->profolio }}"></textarea> 
									<div class="profolio col-lg-12 col-xs-12">
										{{ $user->profolio }}
									</div>

									@if ($errors->has('profolio'))
										<span class="help-block">
											<strong>{{ $errors->first('profolio') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="col-lg-4 col-xs-4"></div>
							<div class="col-lg-8 col-xs-8">
								<div class="row">
									<div class="col-lg-6 col-xs-6"></div>
									<div class="col-lg-6 col-xs-6">
										<button type="submit button" class="btn profile-btn save-profolio-edit">
											<span class="glyphicon glyphicon-ok glyphicon-sizing"></span>&nbsp;
										</button>
										<button type="button" class="btn profile-btn profolio-edit">
											<span class="glyphicon glyphicon-pencil glyphicon-sizing"></span>&nbsp;
										</button>
										<button type="button" class="btn profile-btn cancel-profolio-edit btn-margin">
											<span class="glyphicon glyphicon-remove glyphicon-sizing"></span>&nbsp;
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</div>
@endsection