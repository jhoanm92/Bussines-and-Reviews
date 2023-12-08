@extends('layout.main')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-6">
            <h1 class="text-center float-start">Crear de negocios</h1>
        </div>
        <div class="col-6">
            <a href="{{ route('bussines.home') }}" class="btn btn-primary float-end">
                Volver
            </a>
        </div>
    </div>

    {{-- insert component livewire --}}
    <div class="container">
        @livewire('panel.create')
    </div>
</div>
@endsection
