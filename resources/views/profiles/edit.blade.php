@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('users.label_update_profile')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($user, ['route' => ['profiles.update'], 'method' => 'patch', 'files'=> true]) !!}

                    @include('profiles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    $("#avatar").change(function(){
        if (this.files && this.files[0]) {
            if(this.files[0].name.match(/\.(jpg|jpeg|png|gif)$/)){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pre_avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
            else{
                alert('Please pick an image!');
                this.value = '';
                $('#pre_avatar').attr('src', '{{ asset(config('path.avatar').$user->avatar) }}');
            }
        }
    });
    $('#avatar_edit').click(function () {
        $('#avatar').trigger('click');
    })
    $('#avatar_remove').click(function () {
        this.value = '';
        $('#pre_avatar').attr('src', '{{ asset(config('path.avatar').$user->avatar) }}');
    })
    </script>
@endsection