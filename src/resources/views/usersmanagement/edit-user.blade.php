@extends(config('laravelusers.laravelUsersBladeExtended'))

@section('template_title')
    {!! trans('laravelusers::laravelusers.create-new-user') !!}
@endsection

@section('template_linked_css')
    @if(config('laravelusers.enabledDatatablesJs'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelusers.datatablesCssCDN') }}">
    @endif
    @if(config('laravelusers.fontAwesomeEnabled'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelusers.fontAwesomeCdn') }}">
    @endif
    @include('laravelusers::partials.styles')
    @include('laravelusers::partials.bs-visibility-css')
@endsection

@section('content')
    <div class="container">
        @if(config('laravelusers.enablePackageBootstapAlerts'))
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    @include('laravelusers::partials.form-status')
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            {!! trans('laravelusers::laravelusers.create-new-user') !!}
                            <div class="pull-right">
                                <a href="{{ route('users') }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="{!! trans('laravelusers::laravelusers.tooltips.back-users') !!}">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    @endif
                                    {!! trans('laravelusers::laravelusers.buttons.back-to-users') !!}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => 'users.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback row {{ $errors->has('email') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('email', trans('laravelusers::forms.create_user_label_email'), array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('email', NULL, array('id' => 'email', 'class' => 'form-control', 'placeholder' => trans('laravelusers::forms.create_user_ph_email'))) !!}
                                        <div class="input-group-append">
                                            <label for="email" class="input-group-text">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_email') !!}" aria-hidden="true"></i>
                                                @else
                                                    {!! trans('laravelusers::forms.create_user_label_email') !!}
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('username') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('username', 'Username', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('username', NULL, array('id' => 'username', 'class' => 'form-control', 'placeholder' => 'Username')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="username">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_username') !!}" aria-hidden="true"></i>
                                                @else
                                                    Username
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('mobile') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('mobile', 'Mobile', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('mobile', NULL, array('id' => 'mobile', 'class' => 'form-control', 'placeholder' => 'Mobile')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="mobile">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_username') !!}" aria-hidden="true"></i>
                                                @else
                                                    Mobile
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('name', 'Name', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="name">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_username') !!}" aria-hidden="true"></i>
                                                @else
                                                    Name
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('trello_id') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('trello_id', 'Trello ID', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('trello_id', NULL, array('id' => 'trello_id', 'class' => 'form-control', 'placeholder' => 'Trello ID')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="trello_id">
                                                Trello ID
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('trello_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('trello_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('msp_id') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('msp_id', 'MSP ID', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('msp_id', NULL, array('id' => 'msp_id', 'class' => 'form-control', 'placeholder' => 'MSP ID')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="msp_id">
                                                Trello ID
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('msp_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('msp_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('initial') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('initial', 'علامت اختصاری', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('initial', NULL, array('id' => 'initial', 'class' => 'form-control', 'placeholder' => 'علامت اختصاری')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="initial">
                                                علامت اختصاری
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('initial'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('initial') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('clockify_id') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('clockify_id', 'Clockify ID', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::text('clockify_id', NULL, array('id' => 'clockify_id', 'class' => 'form-control', 'placeholder' => 'Clockify ID')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="clockify_id">
                                                Clockify ID
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('clockify_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('clockify_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('start_weekday') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('start_weekday', 'Start weekday', array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::select('start_weekday', [
                                            0 => "شنبه",
                                            1 => "یک‌شنبه",
                                            2 => "دوشنبه",
                                            3 => "سه‌شنبه",
                                            4 => "چهارشنبه",
                                            5 => "پنج‌شنبه",
                                            6 => "جمعه"
                                        ], array('id' => 'start_weekday', 'class' => 'form-control', 'placeholder' => 'Start weekday')) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="name">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_username') !!}" aria-hidden="true"></i>
                                                @else
                                                    Start weekday
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('start_weekday'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('start_weekday') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            @if($rolesEnabled)
                                <div class="form-group has-feedback row {{ $errors->has('role') ? ' has-error ' : '' }}">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        {!! Form::label('role', trans('laravelusers::forms.create_user_label_role'), array('class' => 'col-md-3 control-label')); !!}
                                    @endif
                                    <div class="col-md-9">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="role" id="role">
                                            <option value="">{!! trans('laravelusers::forms.create_user_ph_role') !!}</option>
                                            @if ($roles)
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="role">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="{!! trans('laravelusers::forms.create_user_icon_role') !!}" aria-hidden="true"></i>
                                                @else
                                                    {!! trans('laravelusers::forms.create_user_label_username') !!}
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            @endif
                            <div class="form-group has-feedback row {{ $errors->has('password') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('password', trans('laravelusers::forms.create_user_label_password'), array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::password('password', array('id' => 'password', 'class' => 'form-control ', 'placeholder' => trans('laravelusers::forms.create_user_ph_password'))) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="password">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_password') !!}" aria-hidden="true"></i>
                                                @else
                                                    {!! trans('laravelusers::forms.create_user_label_password') !!}
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group has-feedback row {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">
                                @if(config('laravelusers.fontAwesomeEnabled'))
                                    {!! Form::label('password_confirmation', trans('laravelusers::forms.create_user_label_pw_confirmation'), array('class' => 'col-md-3 control-label')); !!}
                                @endif
                                <div class="col-md-9">
                                    <div class="input-group">
                                        {!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => trans('laravelusers::forms.create_user_ph_pw_confirmation'))) !!}
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="password_confirmation">
                                                @if(config('laravelusers.fontAwesomeEnabled'))
                                                    <i class="fa fa-fw {!! trans('laravelusers::forms.create_user_icon_pw_confirmation') !!}" aria-hidden="true"></i>
                                                @else
                                                    {!! trans('laravelusers::forms.create_user_label_pw_confirmation') !!}
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            {!! Form::button(trans('laravelusers::forms.create_user_button_text'), array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts')
    @if(config('laravelusers.tooltipsEnabled'))
        @include('laravelusers::scripts.tooltips')
    @endif
@endsection
