@extends('layout.main')

@section('content')
<div class="bg-light p-5 rounded">
    <h1 class="text-center mb-2">to-do-list</h1>
    <a class="btn btn-success mb-2" href="{{route('tambah')}}" role="button">Tambah</a>
    <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Tugas</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$d->tugas}}</td>
                <td>{{$d->status}}</td>
                <td>{{($d->created_at)->timezone('Asia/Jakarta')}}</td>
                <td>
                    <div class="btn-group gap-2">
                        <a href="{{route('edit', $d->id)}}" class="btn btn-warning rounded">Ubah</a>
                        <a href="{{route('delete', $d->id)}}" class="btn btn-danger rounded">Hapus</a>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
  </div>

@endsection

