{{csrf_field()}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Dates</label>
            <input type="date" name="date" value="{{isset($rows) ? $rows->date :''}}" class="form-control @error('date') is-invalid @enderror">
        </div>
        @error('date')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Age</label>
            <input type="time" name="time" value="{{isset($rows) ? $rows->time :''}}" class="form-control @error('time') is-invalid @enderror">
            @error('time')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

</div>