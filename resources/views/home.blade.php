<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Escola FP Informàtica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Gestió Escola FP Informàtica</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <div class="col text-center">
                <a href="{{ route('modules.index') }}" class="btn btn-primary btn-lg w-100">Gestió de Mòduls</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('units.index') }}" class="btn btn-outline-dark btn-lg m-2">Gestió UFs</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('teachers.index') }}" class="btn btn-success btn-lg w-100">Gestió de Professors</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('students.index') }}" class="btn btn-warning btn-lg w-100">Gestió d'Alumnes</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('assessments.index') }}" class="btn btn-danger btn-lg w-100">Gestió d'Avaluacions</a>
            </div>
        </div>
    </div>
</body>
</html>
