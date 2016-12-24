@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-8">Profile</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<button type="button" class="btn info-edit">
								<span class="glyphicon glyphicon-pencil glyphicon-sizing"></span>&nbsp;
							</button>
						</div>
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
								<div class="col-lg-8 col-xs-8"></div>
								<div class="col-lg-2 col-xs-2 padding-reset"><input class="btn btn-default cancel-info-edit" value="Cancel" type="reset"></div>
								<div class="col-lg-2 col-xs-2 padding-reset">
									<input class="btn btn-primary save-info-edit" value="Save" type="button">
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
						<div class="col-lg-12 text-body"></div>
						<div class="col-lg-4">
							
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8"></div>
								<div class="col-lg-2 padding-reset"><input class="btn btn-default cancel-summary-edit" value="Cancel" type="reset"></div>
								<div class="col-lg-2 padding-reset">
									<input class="btn btn-primary summary-edit" value="Edit" type="button">
									<input class="btn btn-primary save-summary-edit" value="Save" type="button">
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
						<div class="col-lg-12 text-body"></div>
						<div class="col-lg-4">
							
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8"></div>
								<div class="col-lg-2 padding-reset"><input class="btn btn-default cancel-profolio-edit" value="Cancel" type="reset"></div>
								<div class="col-lg-2 padding-reset">
									<input class="btn btn-primary profolio-edit" value="Edit" type="button">
									<input class="btn btn-primary save-profolio-edit" value="Save" type="button">
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