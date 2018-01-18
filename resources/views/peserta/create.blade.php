@extends('layouts.app')

@section('content')

<h1>Add Peserta</h1>

<hr />

[ <a href="{{ route('peserta.create') }}">Add Peserta</a> ] 

<hr />

{!! Form::open(['route' => 'peserta.store']) !!}

<div class="form-group">
{!! Form::label('nama', 'Nama') !!}
{!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('noIC', 'No IC') !!}
{!! Form::text('no_ic', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('jabatan', 'Jabatan') !!}
{!! Form::select('id_jabatan', $jabatan, null, ['class' => 'form-control', 'placeholder' => 'Jabatan']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Add Peserta', ['class' => 'btn btn-primary']) !!}
</div>


{!! Form::close() !!}


@endsection