  @extends('layouts.master')

@section('content')
<div class="container">
	   <h2>Client create demonistration</h2>
	 @include('client.includes.header')
<hr>
<div class="panel-body">
    <div class="form">
    {{ Form::open(['route' => 'clients.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
		<div class="form-group">
		    {{ Form::label('name', 'Client Name', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        {{ Form::text('name', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => 'Enter Client Name']) }}
		        @if ($errors->has('name'))
                    <span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('phone', 'Client Ph. Number', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        {{ Form::number('phone', null, ['class' => 'form-control', 'maxlength' => '10', 'required' => 'required', 'placeholder' => 'Enter Client Ph. Number']) }}
		        @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('email', 'Client E-mail', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Enter Client E-mail']) }}
		        @if ($errors->has('email'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('address', 'Client Address', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        {{ Form::text('address', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required',  'placeholder' => 'Enter Client Address']) }}
		        @if ($errors->has('address'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('address') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('edu_background', 'Edu Background', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        {{ Form::text('edu_background', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Enter Client Edu Background']) }}
		        @if ($errors->has('edu_background'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('edu_background') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('nationality', 'Client Nationality', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        {{ Form::text('nationality', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => 'Enter Client Nationality']) }}
		        @if ($errors->has('nationality'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('nationality') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('dob', 'Gender', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        <select class="gender form-control m-bot15" name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
		        @if ($errors->has('gender'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('dob', 'Client Dob', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		          <div class="input-group date">
                <input type="text" class="form-control" name="dob" id="data-date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
		        @if ($errors->has('dob'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('dob') }}</strong>
                    </span>
                @endif
		    </div>
		</div>

		<div class="form-group">
		    {{ Form::label('dob', 'Mode of contact', ['class' => 'control-label col-sm-2']) }}

		    <div class="col-sm-10">
		        <select class="mode_of_contact form-control m-bot15" name="mode_of_contact" id="mode_of_contact">
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                </select>
		        @if ($errors->has('mode_of_contact'))
		        	<span class="help-block">
                        <strong class="alert alert-danger">{{ $errors->first('mode_of_contact') }}</strong>
                    </span>
                @endif
		    </div>
		</div>
		<!-- submit and cancel btn -->
              <div class="box-body">
                  <div class="pull-left">
                      {{ link_to_route('clients.index', 'Cancel', [], ['class' => 'btn btn-danger btn-xs']) }}
                  </div><!--pull-left-->

                  <div class="pull-right">
                      {{ Form::submit('Submit', ['class' => 'btn btn-success btn-xs']) }}
                  </div><!--pull-right-->
              </div><!--box-->

              {{ Form::close() }}
	</div>
</div>
       
@endsection
@section('scripts')
<script>
// drop down form
$('select#mode_of_contact').selectpicker();  
$('select#gender').selectpicker();  
// datepicker
$('#data-date').datepicker({
    format: 'yyyy-mm-dd'
 });

</script>

@endsection
