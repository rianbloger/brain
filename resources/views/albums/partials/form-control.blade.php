<div class="form-group">
    <label for="band">Band</label>
    <select name="band" id="band" class="form-control">
        <option disabled selected>Choose a band</option>
        @foreach ($bands as $band)
            <option {{ $band->id == $album->band_id ? 'selected' : '' }} value="{{ $band->id }}">{{ $band->name }}</option>
        @endforeach
    </select>
    @error('band')
        <div class="text-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" value="{{ old('name')?? $album->name }}" name="name" id="name">
    @error('name')
        <div class="text-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="year">Year</label>
    <select class="form-control" name="year" id="year">
        <option selected disabled>Choose a year</option>
        @for($i = 1997; $i <= date('Y'); $i++)
        <option {{ $album->year == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    @error('year')
        <div class="text-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submitLabel }}</button>