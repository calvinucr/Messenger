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
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-lg-3 col-xs-3 control-label">Name:</label>
									<div class="col-lg-8 col-xs-8">
										<label for="name" class="control-label info">
											<p class="text-info">{{ $user->name }}</p>
										</label>
										<input class="edit-input" type="text" value="{{ $user->name }}"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 col-xs-3 control-label">Company:</label>
									<div class="col-lg-8 col-xs-8">
										<label for="name" class="control-label info">
											<p class="text-info">{{ $user->company }}</p>
										</label>
										<input class="edit-input" type="text" value="{{ $user->company }}"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 col-xs-3 control-label">City:</label>
									<div class="col-lg-8 col-xs-8">
										<label for="name" class="control-label info">
											<p class="text-info">{{ $user->city }}</p>
										</label>
										<input class="edit-input" type="text" value="{{ $user->city }}"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 col-xs-3 control-label">Email:</label>
									<div class="col-lg-8 col-xs-8">
										<label for="name" class="control-label info">
											<p class="text-info">{{ $user->email }}</p>
										</label>
										<input class="edit-input edit_field" type="text" value="{{ $user->email }}"/>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-xs-4">
							<input type="file" class="text-center center-block well well-sm" value="New Picture">
						</div>
						<div class="col-lg-8 col-xs-8">
							<div class="row">
								<div class="col-lg-6 col-xs-6"></div>
								<div class="col-lg-6 col-xs-6">
									<button type="button" class="btn profile-btn save-info-edit">
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
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Summary</div>
				<div class="panel-body">

					<div class="row">
						<div class="col-lg-12 col-xs-12 text-body"></div>
						<div class="col-lg-4 col-xs-4">
							
						</div>
						<div class="col-lg-8 col-xs-8">
							<div class="row">
								<div class="col-lg-6 col-xs-6"></div>
								<div class="col-lg-6 col-xs-6">
									<button type="button" class="btn profile-btn save-summary-edit">
										<span class="glyphicon glyphicon-ok glyphicon-sizing"></span>&nbsp;
									</button>
									<button type="button" class="btn profile-btn summary-edit">
										<span class="glyphicon glyphicon-pencil glyphicon-sizing"></span>&nbsp;
									</button>
									<button type="button" class="btn profile-btn cancel-summary-edit btn-margin">
										<span class="glyphicon glyphicon-remove glyphicon-sizing"></span>&nbsp;
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Profolio</div>
				<div class="panel-body">

					<div class="row">
						<div class="col-lg-12 col-xs-12 text-body"></div>
						<div class="col-lg-4 col-xs-4">
							
						</div>
						<div class="col-lg-8 col-xs-8">
							<div class="row">
								<div class="col-lg-6 col-xs-6"></div>
								<div class="col-lg-6 col-xs-6">
									<button type="button" class="btn profile-btn save-profolio-edit">
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
					</div>
				</div>
			</div>				
		</div>
	</div>
</div>
@endsection