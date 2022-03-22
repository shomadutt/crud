@extends('/master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3>Student List</h3>
        <br />


        <table>


            <tr>
                <th>Name</th>
                <th>Email address</th>
            </tr>
            @foreach($studentData as $student)
            <tr>

                <td>{{$student->name}}</td>
                <td>{{$student->email_address}}</td>

            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection