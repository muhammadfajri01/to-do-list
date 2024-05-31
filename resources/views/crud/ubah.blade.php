@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 align-self-center">
        <div class="card p-3">
            <form action="{{route('edit.proses', ['id' => $data->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="tugas" class="form-label">Tugas</label>
                  <input type="text" class="form-control" id="tugas" name="tugas" value="{{$data->tugas}}">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1" {{ $data->status == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Selesai
                    </label>
                  </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="0" {{ $data->status == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Belum Selesai
                    </label>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection

