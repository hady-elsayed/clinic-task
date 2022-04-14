@extends('pages.layout.app')

@section('title')
    patient profile create
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'Patient profile create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create Profile</h4>
                <p class="card-category">Create a new Patient profile</p>
            </div>
            <div class="card-body">
                <form action="{{route('patient.store',['id'])}}" method="post">
                    @include('pages.patients.form')

                    <button type="submit" class="btn btn-primary pull-right">Add Patient Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

