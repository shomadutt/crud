@extends('/master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3>Select School</h3>
        <br />


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

            <br />
            <br />

        </form>


    </div>
</div>
@endsection