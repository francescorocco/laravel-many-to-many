@extends('layouts.admin')


@section('content')

<form method="POST" action="{{route('admin.works.store')}}">

    @csrf

    <div class="mb-3">
    <label for="title" class="form-label">Nome del progetto</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label">Descrizione del progetto</label>
    <textarea class="form-control  @error('description') is-invalid @enderror" id="description " name="description">{{old('description')}}</textarea>
    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="languages" class="form-label">Linguaggi usati nel progetto</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" id="languages " name="languages" value="{{old('languages')}}">
    @error('languages')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="type_id" class="form-label">Seleziona tipo</label>

    <select class="form-select" name="type_id" id="type_id">
        <option @selected(old('type_id')=='') value="">Nessun tipo</option>

        @foreach ($types as $type)
            <option @selected(old('type_id')==$type->id) value="{{$type->id}}">{{$type->name}}</option>
        @endforeach

    </select>
    @error('type_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div> 


    <button type="submit" class="btn btn-primary">Salva</button>
</form>

@endsection