<div class="card mb-3">
    <img src="{{ asset('img/logo.png') }}" class="card-img-top img-fluid"/>
    <div class="card-body">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First name</th>
                    <th scope="col">Second Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{ $student->cne }}</th>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->second_name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ url('/student/'. $student->id . '/edit') }}">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('delete').submit();">Delete</button>
        
                            <form action="{{ url('/student/' . $student->id) }}" method="POST" style="display: none" id="delete">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>