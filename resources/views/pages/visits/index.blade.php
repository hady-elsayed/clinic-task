@extends('pages.layout.app')

@section('title')
    visits control
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'visits control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">visits Table</h4>
                            <p class="card-category"> Here u can create / edit / delete visits</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('visit.create')}}" class="btn btn-white btn-round">Add visit</a>
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
                                    patient name
                                </th>

                                <th>
                                    Examination type
                                </th>
                                <th>
                                    Examination fees
                                </th>
                                <th>
                                    diagnosis
                                </th>
                                <th>
                                    prescription
                                </th>
                                <th>
                                    lab or tests
                                </th>
                                <th class="text-right">
                                    control
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $visit)
                                <tr>
                                    <td>
                                        {{$visit-> id}}
                                    </td>
                                    <td>
                                        {{$visit-> patient->name}}
                                    </td>
                                    <td>
                                        {{$visit-> examinations->name}}
                                    </td>
                                    <td>
                                        {{$visit-> examinations->fees}}
                                    </td>
                                    <td>
                                        {{$visit-> diagnosis}}
                                    </td>
                                    <td>
                                        {{$visit-> prescription}}
                                    </td>
                                    <td>
                                        {{$visit-> lab_or_tests}}
                                    </td>


                                    <td class="td-actions text-right">
                                        <a  href="{{route('visit.edit',$visit->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit visit">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('visit.destroy',$visit->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove visit">
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

