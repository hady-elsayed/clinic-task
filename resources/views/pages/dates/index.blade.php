@extends('pages.layout.app')

@section('title')
    Clinic schedule control
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'Clinic schedule control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">dates Table</h4>
                            <p class="card-category"> Here u can create / edit / delete dates</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('date.create')}}" class="btn btn-white btn-round">Add date</a>
                        </div>
                    </div>

                </div>



                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    date
                                </th>
                                <th>
                                    time
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $date)
                                <tr>
                                    <td>
                                        {{$date-> id}}
                                    </td>
                                    <td>
                                        {{$date-> date}}
                                    </td>
                                    <td>
                                        {{$date-> time}}
                                    </td>

                                    <td class="td-actions text-right">
                                        <a  href="{{route('date.edit',$date->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit date">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('date.destroy',$date->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove date">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        {!! $rows->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection

