@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 align-self-center">
        <div class="card p-3">
            <form action="{{route('tambah.proses')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="tugas" class="form-label">Tugas</label>
                  <input type="text" class="form-control" id="tugas" name="tugas">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
