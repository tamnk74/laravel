@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1>
                    @lang('users.label_user_profile')
                </h1>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @include('profiles.show_fields')
            </div>
        </div>
    </div>
@endsection