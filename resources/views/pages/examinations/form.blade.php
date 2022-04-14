{{csrf_field()}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">name</label>
            <input type="text" name="name" value="{{isset($rows) ? $rows->name :''}}" class="form-control @error('name') is-invalid @enderror">
        </div>
        @error('name')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">fees</label>
            <input type="number" step="any" name="fees" value="{{isset($rows) ? $rows->fees :''}}" class="form-control @error('fees') is-invalid @enderror">
            @error('fees')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

</div>