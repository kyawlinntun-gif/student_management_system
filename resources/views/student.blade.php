<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>School Management System</title>
</head>
<body>

    

    <div class="container-fluid">
        <div class="row">
            @if($layout == 'index')
                <div class="col-6">
                    @include('studentslist')
                </div>
                <div class="col-6">

                </div>
            @elseif($layout == 'create')
                <div class="col-6">
                    @include('studentslist')
                </div>
                <div class="col-6">
                    <form>
                        <div class="form-group">
                            <label for="cne">CNE</label>
                            <input id="cne" class="form-control" type="text" name="cne">
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input id="first_name" class="form-control" type="text" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="second_name">Second Name</label>
                            <input id="second_name" class="form-control" type="text" name="second_name">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input id="age" class="form-control" type="number" name="age">
                        </div>
                        <div class="form-group">
                            <label for="speciality">Speciality</label>
                            <input id="speciality" class="form-control" type="text" name="speciality">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            @elseif($layout == 'show')
                <div class="col-6">
                    @include('studentslist')
                </div>
                <div class="col-6">
                    
                </div>
            @elseif($layout == 'edit')
                <div class="col-6">
                    @include('studentslist')
                </div>
                <div class="col-6">
                    
                </div>
            @endif 
        </div>  
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
