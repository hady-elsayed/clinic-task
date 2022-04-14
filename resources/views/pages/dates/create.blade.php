@extends('pages.layout.app')

@section('title')
    date create
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'Date create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create date</h4>
                <p class="card-category">Create a new date</p>
            </div>
            <div class="card-body">
                <form action="{{route('date.store',['id'])}}" method="post">
                    @include('pages.dates.form')

                    <button type="submit" class="btn btn-primary pull-right">Add date Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

