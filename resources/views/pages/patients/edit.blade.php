@extends('pages.layout.app')

@section('title')
    User Edit
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'patient Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update patient Profile</h4>
                <p class="card-category">update patient profile</p>
            </div>
            <div class="card-body">
                <form action="{{route('patient.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('pages.patients.form')

                    <button type="submit" class="btn btn-primary pull-right">Update patient Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

