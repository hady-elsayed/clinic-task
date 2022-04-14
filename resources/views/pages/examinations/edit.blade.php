@extends('pages.layout.app')

@section('title')
    examination Edit
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'examination Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update examination </h4>
                <p class="card-category">update examination </p>
            </div>
            <div class="card-body">
                <form action="{{route('examination.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('pages.examinations.form')

                    <button type="submit" class="btn btn-primary pull-right">Update examination </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

