@extends('layouts.user')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <form action="{{ Route('notif') }}" method="post">
                    @csrf
                        <div class="form-group">
                          <label for="">Pessan</label>
                          <input class="form-control" name="notif" type="text">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Kirim Notifikasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection