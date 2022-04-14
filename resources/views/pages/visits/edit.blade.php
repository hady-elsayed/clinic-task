@extends('pages.layout.app')

@section('title')
    visit Edit
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'visit Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update visit </h4>
                <p class="card-category">update visit </p>
            </div>
            <div class="card-body">
                <form action="{{route('visit.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('pages.visits.formEdit')

                    <button type="submit" class="btn btn-primary pull-right">Update visit</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

