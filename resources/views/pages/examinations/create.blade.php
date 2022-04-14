@extends('pages.layout.app')

@section('title')
    examination create
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'examination create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create examination</h4>
                <p class="card-category">Create a new examination</p>
            </div>
            <div class="card-body">
                <form action="{{route('examination.store',['id'])}}" method="post">
                    @include('pages.examinations.form')

                    <button type="submit" class="btn btn-primary pull-right">Add examination </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

