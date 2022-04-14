@extends('pages.layout.app')

@section('title')
    date Edit
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'date Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update date </h4>
                <p class="card-category">update date </p>
            </div>
            <div class="card-body">
                <form action="{{route('date.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('pages.dates.form')

                    <button type="submit" class="btn btn-primary pull-right">Update date </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection

