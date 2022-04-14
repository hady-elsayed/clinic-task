{{csrf_field()}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">patient name</label>

            <select name="patient_id" class="form-control @error('patient_id') is-invalid @enderror">
                @foreach($patients as $patient)

                    <option value="{{$patient -> id}}" {{isset($rows) && $rows->patient_id =='$patient -> id' ? "selected":''}}>{{$patient -> name}}</option>
                @endforeach
            </select>
            @error('patient_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Visit date</label>

            <select name="date_id" class="form-control @error('date_id') is-invalid @enderror">
                @foreach($dates as $date)

                    <option value="{{$date -> id}}" {{isset($rows) && $rows->date_id =='$date -> id' ? "selected":''}}>{{$date -> date}}</option>
                @endforeach
            </select>
            @error('date_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">visit time</label>

            <select name="date_id" class="form-control @error('date_id') is-invalid @enderror">
                @foreach($dates as $date)

                    <option value="{{$date -> id}}" {{isset($rows) && $rows->date_id =='$date -> id' ? "selected":''}}>{{$date -> time}}</option>
                @endforeach
            </select>
            @error('date_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Examination type</label>

            <select name="examination_id" class="form-control @error('examination_id') is-invalid @enderror">
                @foreach($examinations as $examination)

                    <option value="{{$examination -> id}}" {{isset($rows) && $rows->examination_id =='$examination -> id' ? "selected":''}}>{{$examination -> name}}</option>
                @endforeach
            </select>
            @error('examination_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Examination fees</label>

            <select name="examination_id" class="form-control @error('examination_id') is-invalid @enderror">
                @foreach($examinations as $examination)

                    <option value="{{$examination -> id}}" {{isset($rows) && $rows->examination_id =='$examination -> id' ? "selected":''}}>{{$examination -> fees}}</option>
                @endforeach
            </select>
            @error('examination_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>



    </div>
</div>