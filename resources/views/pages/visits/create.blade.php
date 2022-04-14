@extends('pages.layout.app')

@section('title')
    visit create
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'visit create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create visit</h4>
                <p class="card-category">Create a new visit </p>
            </div>
            <div class="card-body">
                <form action="{{route('visit.store',['id'])}}" method="post">
                    @include('pages.visits.form')

                    <button type="submit" class="btn btn-primary pull-right">Add visit Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

