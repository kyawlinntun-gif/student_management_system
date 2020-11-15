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

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
