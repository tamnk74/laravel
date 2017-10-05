<!-- Name Field -->
<div class="row" style="margin: 0 10px 0 25px;">
    <div class="form-group text-center" style="margin: 0 auto; width: 400px; display: block;">
        {!! Form::label('avatar', __('users.label_avatar')) !!}
        <input name="avatar" type="file" id="avatar" style="display: none">
        <div class="row">
            <button type="button" class="btn btn-info" id="avatar_edit"><i class="fa fa-fw fa-edit"></i></button>
            <button type="button" class="btn btn-default" id="avatar_remove"><i class="fa fa-fw fa-remove"></i></button>
        </div>
        <img src="{{ asset(config('path.avatar').$user->avatar) }}" id="pre_avatar" class="img-rounded" width="400"
             height="300"/>
    </div>
</div>

<div class="row" style="margin: 0 10px 0 10px;">
    <div class="form-group col-md-6">
        <!-- Name Field -->
        <div class="form-group">
            {!! Form::label('name', __('users.label_name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Email Field -->
        <div class="form-group">
            {!! Form::label('email', __('users.label_email')) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Password Field -->
        <div class="form-group">
            {!! Form::label('password', __('users.label_password')) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('confirm-password', __('users.label_password_confirm')) !!}
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>

    <!-- Other Field -->
    <div class="form-group col-md-6">
        <!-- Full Name Field -->
        <div class="form-group">
            {!! Form::label('full_name', __('users.label_full_name')) !!}
            {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Phone number Field -->
        <div class="form-group">
            {!! Form::label('phone_number', __('users.label_phone_number')) !!}
            {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Address Field -->
        <div class="form-group">
            {!! Form::label('address', __('users.label_address')) !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Birthday Field -->
        <div class="form-group">
            {!! Form::label('birthday', __('users.label_birthday')) !!}
            {!! Form::date('birthday', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-6  col-sm-offset-1">
    {!! Form::submit(__('buttons.btn_save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profile') !!}" class="btn btn-default">@lang('buttons.btn_cancel')</a>
</div>