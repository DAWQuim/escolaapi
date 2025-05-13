@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Avaluacions</h2>

    <a href="{{ route('assessments.create') }}" class="btn btn-success mb-3">Nova avaluació</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Alumne</th>
                <th>Unitat formativa</th>
                <th>Nota</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assessments as $assessment)
            <tr>
                <td>{{ $assessment->student->first_name }} {{ $assessment->student->last_name }}</td>
                <td>{{ $assessment->unit->title }}</td>
                <td>{{ $assessment->grade }}</td>
                <td>
                    <a href="{{ route('assessments.edit', $assessment) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('assessments.destroy', $assessment) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Segur que vols eliminar aquesta avaluació?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
