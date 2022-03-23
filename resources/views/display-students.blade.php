@extends('/master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3>Student List</h3>
        <br />

        <a href="{{url('select-school')}}" id="button" class="btn">View students</a>
        <br />
        <br />
        <br />

        <table class="table table-striped">


            <tr>
                <th>Name</th>
                <th>Email address</th>
            </tr>
            @foreach($studentData as $student)
            <tr>

                <td>{{$student['name']}}</td>
                <td>{{$student['email_address']}}</td>

            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection