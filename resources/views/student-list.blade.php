@extends('/master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3>Student List</h3>
        <br />
        @if(Session::has('student_add'))
        <span>{{Session::get('student_add')}}</span>
        @endif

        <form method="post" action="{{route('list.student')}}">
            @csrf

            <div class="mb-3">
                <label for="select" class="form-label">Select school</label>
                <select class="form-select" name="schoolSelection">
                    @foreach($schoolsArray as $row)
                    <option value="{{$row['id']}}">{{$row['school_name']}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection