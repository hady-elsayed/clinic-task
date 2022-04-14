@extends('pages.layout.app')

@section('title')
    patient profile control
@endsection



@section('content')

    @component('pages.layout.header',['nav_title'=>'patient profile control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">patients Table</h4>
                            <p class="card-category"> Here u can create / edit / delete patient profile</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('patient.create')}}" class="btn btn-white btn-round">Add patient profile</a>
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
                                    Name
                                </th>
                                <th>
                                    age
                                </th>
                                <th>
                                    address
                                </th>
                                <th>
                                    Phone Number
                                </th>
                                <th class="text-right">
                                    control
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $patient)
                                <tr>
                                    <td>
                                        {{$patient-> id}}
                                    </td>
                                    <td>
                                        {{$patient-> name}}
                                    </td>
                                    <td>
                                        {{$patient-> age}}
                                    </td>
                                    <td>
                                        {{$patient-> address}}
                                    </td>
                                    <td>
                                        {{$patient-> phone}}
                                    </td>
                                    <td class="td-actions text-right">
                                        <a  href="{{route('patient.edit',$patient->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit Patient">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('patient.destroy',$patient->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove Patient">
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

