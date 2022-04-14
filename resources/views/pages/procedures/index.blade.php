@extends('pages.layout.app')

@section('title')
    procedure control
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'procedure control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">procedures Table</h4>
                            <p class="card-category"> Here u can create / edit / delete procedures</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('procedure.create')}}" class="btn btn-white btn-round">Add procedure</a>
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
                                    name
                                </th>
                                <th>
                                    fees
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $procedure)
                                <tr>
                                    <td>
                                        {{$procedure-> id}}
                                    </td>
                                    <td>
                                        {{$procedure-> name}}
                                    </td>
                                    <td>
                                        {{$procedure-> fees}}
                                    </td>

                                    <td class="td-actions text-right">
                                        <a  href="{{route('procedure.edit',$procedure->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit procedure">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('procedure.destroy',$procedure->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove $procedure">
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

