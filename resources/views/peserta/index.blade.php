@extends('layouts.app')


@section('content')

<h1>Listing Peserta</h1>

<hr />

[ <a href="{{ route('peserta.create') }}">Add Peserta</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td>Bil</td>
		<td>Nama</td>
		<td>No KP</td>
		<td>Jabatan</td>
		<td>Pilihan</td>
	</tr>

	@foreach($peserta as $atlet)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $atlet->nama }}</td>
		<td>{{ $atlet->no_ic }}</td>
		<td>{{ $atlet->jabatan->kod }} - {{ $atlet->jabatan->nama }}</td>
		<td>
				{!! Form::open(['route' => ['peserta.destroy', $atlet->id], 'method' => 'delete']) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}{!! Form::open(['route' => ['peserta.show', $atlet->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}
			
	</tr>
	@endforeach
</table>

@endsection