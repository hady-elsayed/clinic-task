@extends('pages.layout.app')

@section('title')
    procedure Edit
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'procedure Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update procedure </h4>
                <p class="card-category">update procedure </p>
            </div>
            <div class="card-body">
                <form action="{{route('procedure.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('pages.procedures.form')

                    <button type="submit" class="btn btn-primary pull-right">Update procedure </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

