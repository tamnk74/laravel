
<!-- Profile Image -->
<div class="box box-primary">
    <li class="box-body box-profile" style="list-style-type: none;">
        <img class="profile-user-img img-responsive img-circle" src="{{ asset('/images/avatars/'.$user->avatar) }}" alt="User profile picture">

        <h3 class="profile-username text-center">{!! $user->name !!}</h3>

        <p class="text-muted text-center">
            @if(!empty($user->roles))
                @foreach($user->roles as $v)
                    <label class="label label-success">{{ $v->display_name }}</label>
                @endforeach
            @endif
        </p>

        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>{!! Form::label('full_name', __('users.label_full_name')) !!}</b>
                <a class="pull-right">{!! $user->full_name !!}</a>
            </li>
            <li class="list-group-item">
                <b>{!! Form::label('full_name', __('users.label_birthday')) !!}</b>
                <a class="pull-right">{!! $user->birthday !!}</a>
            </li>
            <li class="list-group-item">
                <b>{!! Form::label('full_name', __('users.label_phone_number')) !!}</b>
                <a class="pull-right">{!! $user->phone_number !!}</a>
            </li>
            <li class="list-group-item">
                <b>{!! Form::label('full_name', __('users.label_address')) !!}</b>
                <a class="pull-right">{!! $user->address !!}</a>
            </li>
        </ul>
        <a href="{!! route('profiles.edit') !!}" class="btn btn-primary btn-block"><b>@lang('buttons.btn_edit')</b></a>
    </li>
    <!-- /.box-body -->
</div>