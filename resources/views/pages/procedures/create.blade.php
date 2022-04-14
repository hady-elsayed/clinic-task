@extends('pages.layout.app')

@section('title')
    precedure create
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'procedure create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create procedure</h4>
                <p class="card-category">Create a new procedure</p>
            </div>
            <div class="card-body">
                <form action="{{route('procedure.store',['id'])}}" method="post">
                    @include('pages.procedures.form')

                    <button type="submit" class="btn btn-primary pull-right">Add procedure </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

