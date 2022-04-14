@extends('pages.layout.app')

@section('title')
    examination control
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'examination control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">examinations Table</h4>
                            <p class="card-category"> Here u can create / edit / delete examinations</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('examination.create')}}" class="btn btn-white btn-round">Add examination</a>
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
                            @foreach($rows as $examination)
                                <tr>
                                    <td>
                                        {{$examination-> id}}
                                    </td>
                                    <td>
                                        {{$examination-> name}}
                                    </td>
                                    <td>
                                        {{$examination-> fees}}
                                    </td>

                                    <td class="td-actions text-right">
                                        <a  href="{{route('examination.edit',$examination->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit examination">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('examination.destroy',$examination->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove examination">
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

