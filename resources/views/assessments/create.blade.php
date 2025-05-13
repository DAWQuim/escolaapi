@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nova Avaluació</h2>

    <form action="{{ route('assessments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="student_id" class="form-label">Alumne</label>
            <select name="student_id" id="student_id" class="form-control" required>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="unit_id" class="form-label">Unitat Formativa</label>
            <select name="unit_id" id="unit_id" class="form-control" required>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Nota</label>
            <input type="number" step="0.01" min="0" max="10" name="grade" id="grade" class="form-control" required>
        </div>

        <button class="btn btn-success">Desar</button>
        <a href="{{ route('assessments.index') }}" class="btn btn-secondary">Tornar</a>
    </form>
</div>
@endsection
