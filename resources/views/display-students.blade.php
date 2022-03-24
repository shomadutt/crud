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

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email address</th>
                </tr>
            </thead>
            @foreach($studentData as $student)
            @foreach($student as $stud)
            <tbody>
                <tr>

                    <td>{{$stud->name}}</td>
                    <td>{{$stud->email_address}}</td>

                </tr>
            </tbody>
            @endforeach
            @endforeach

        </table>

    </div>
</div>
@endsection