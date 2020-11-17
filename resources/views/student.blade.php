<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    {{-- font css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>School Management System</title>
</head>

<body>

    {{-- Navigation --}}

    @include('nav')

    {{-- Header --}}

    <div class="header mt-4 d-flex align-items-center justify-content-center">
        <h1>Student Management System</h1>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            @if($layout == 'index')
            <div class="col-8 offset-2">
                @include('studentslist')
            </div>
            @elseif($layout == 'create')
            <div class="col-7">
                @include('studentslist')
            </div>
            <div class="col-5">
                <div class="card mb-3">
                    <img src="{{ asset('img/logo2.jpg') }}" class="card-img-top img-fluid">
                    <div class="card-body">
                        <form action="{{ url('/student') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input id="cne" class="form-control" type="text" name="cne" value="{{ old('cne') }}">
                                @error('cne')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" name="first_name"
                                    value="{{ old('first_name') }}">
                                @error('first_name')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="second_name">Second Name</label>
                                <input id="second_name" class="form-control" type="text" name="second_name"
                                    value="{{ old('second_name') }}">
                                @error('second_name')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input id="age" class="form-control" type="number" name="age" value="{{ old('age') }}">
                                @error('age')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input id="speciality" class="form-control" type="text" name="speciality"
                                    value="{{ old('speciality') }}">
                                @error('speciality')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            @elseif($layout == 'show')
            <div class="col-7">
                @include('studentslist')
            </div>
            <div class="col-5">

            </div>
            @elseif($layout == 'edit')
            <div class="col-7">
                @include('studentslist')
            </div>
            <div class="col-5">
                <div class="card mb-3">
                    <img src="{{ asset('img/logo2.jpg') }}" class="card-img-top img-fluid">
                    <div class="card-body">
                        <form action="{{ url('/student/'. $student->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input id="cne" class="form-control" type="text" name="cne"
                                    value="{{ old('cne') ? old('cne') : $student->cne }}">
                                @error('cne')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" name="first_name"
                                    value="{{ old('first_name') ? old('first_name') : $student->first_name }}">
                                @error('first_name')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="second_name">Second Name</label>
                                <input id="second_name" class="form-control" type="text" name="second_name"
                                    value="{{ old('second_name') ? old('second_name') : $student->second_name }}">
                                @error('second_name')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input id="age" class="form-control" type="number" name="age"
                                    value="{{ old('age') ? old('age') : $student->age }}">
                                @error('age')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input id="speciality" class="form-control" type="text" name="speciality"
                                    value="{{ old('speciality') ? old('speciality') : $student->speciality }}">
                                @error('speciality')
                                <span class="text-danger text-small">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    {{-- Footer --}}
    <footer></footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>

    {{-- jquery js --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>

</html>