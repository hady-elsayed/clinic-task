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

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">diagnosis</label>
            <textarea name="diagnosis" cols="15" rows="5" class="form-control @error('diagnosis') is-invalid @enderror">{{isset($rows) ? $rows->diagnosis :''}}</textarea>
            @error('diagnosis')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">prescription</label>
            <textarea name="prescription" cols="15" rows="5" class="form-control @error('prescription') is-invalid @enderror">{{isset($rows) ? $rows->prescription :''}}</textarea>
            @error('prescription')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">lab or tests</label>
            <textarea name="lab_or_tests" cols="15" rows="5" class="form-control @error('lab_or_tests') is-invalid @enderror">{{isset($rows) ? $rows->lab_or_tests :''}}</textarea>
            @error('lab_or_tests')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Procedures</label>

            <select name="procedures[]" class="form-control @error('procedures[]') is-invalid @enderror" multiple style="hight:100px">
                @foreach($procedures as $procedure)

                    <option value="{{$procedure -> id}}" >{{$procedure -> name}}</option>
                @endforeach
            </select>
            @error('procedures[]')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    </div>
</div>