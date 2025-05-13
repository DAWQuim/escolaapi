@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Avaluació</h2>

    <form action="{{ route('assessments.update', $assessment) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Alumne</label>
            <select name="student_id" id="student_id" class="form-control" required>
                @foreach($students as $student)
                    <option value="{{ $student->id }}" {{ $assessment->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="unit_id" class="form-label">Unitat Formativa</label>
            <select name="unit_id" id="unit_id" class="form-control" required>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}" {{ $assessment->unit_id == $unit->id ? 'selected' : '' }}>
                        {{ $unit->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Nota</label>
            <input type="number" step="0.01" min="0" max="10" name="grade" id="grade" class="form-control" value="{{ $assessment->grade }}" required>
        </div>

        <button class="btn btn-primary">Actualitzar</button>
        <a href="{{ route('assessments.index') }}" class="btn btn-secondary">Tornar</a>
    </form>
</div>
@endsection
