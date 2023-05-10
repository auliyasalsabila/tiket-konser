@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Tiket</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tikets.create') }}"> Pesan</a>
                <a href="{{ URL::to('/tikets/cetak_pdf') }}" class="btn btn-primary" target="_blank">Cetak</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Id Tiket</th>
            <th>Nama Pembeli</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Status</th>
            <th>Waktu Check In</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($tikets as $tiket)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $tiket->id }}</td>
            <td>{{ $tiket->nama }}</td>
            <td>{{ $tiket->no_hp }}</td>
            <td>{{ $tiket->email }}</td>
            <td>{{ $tiket->status === "0" ? "-" : "Check In" }}</td>
            <td>{{ $tiket->checkin === null ? "-" : $tiket->checkin }}</td>
            <td>
                <div style="display: flex;">
                    <form action="{{ route('tikets.destroy',$tiket->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('tikets.edit',$tiket->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <form action="{{ route('checkins.update',$tiket->id) }}" method="POST" >
        
                        @csrf
                        @method('PUT')
                        <input hidden type="text" name="status" class="form-control" value="1">
                        <input hidden type="datetime-local" name="checkin" class="form-control" value="{{ now() }}">
                        <button type="submit" class="btn btn-success" style="margin-left: 5px" <?php if ($tiket->status === "1"){ ?> disabled <?php   } ?> >Check In</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $tikets->links() !!}
        
@endsection