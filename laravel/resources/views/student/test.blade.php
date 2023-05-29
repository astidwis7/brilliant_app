<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Jenis Kelamin
        </label>
        <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin"
                    id="laki_laki" value="a"
                    {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
            <label class="form-check-label" for="laki_laki">Laki-laki
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin"
                    id="perempuan" value="b"
                    {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
            <label class="form-check-label" for="perempuan">Perempuan
            </label>
        </div>
        @error('jenis_kelamin')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin
        </label>
        <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin_"
                    id="laki_laki" value="a"
                    {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
            <label class="form-check-label" for="laki_laki">Laki-laki
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin_"
                    id="perempuan" value="b"
                    {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
            <label class="form-check-label" for="perempuan">Perempuan
            </label>
        </div>
        @error('jenis_kelamin')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit
    </button>
</form>