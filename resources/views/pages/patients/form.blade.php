{{csrf_field()}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Patient name</label>
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
            <label class="bmd-label-floating">Age</label>
            <input type="number" name="age" value="{{isset($rows) ? $rows->age :''}}" class="form-control @error('age') is-invalid @enderror">
            @error('age')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Address</label>
            <textarea type="text" name="address" class="form-control @error('address') is-invalid @enderror">{{isset($rows) ? $rows->address :''}}
            </textarea>
            @error('address')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Phone Number</label>
            <input type="tel" name="phone" value="{{isset($rows) ? $rows->phone :''}}" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    </div>
</div>