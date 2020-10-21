@extends('../layouts/app') 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Employee</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('employees') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <textarea class="form-control" id="email" name="email" rows="10" placeholder="Enter email"></textarea>
        </div>
		<div class="form-group">
            <label for="phone">Phone:</label>
            <textarea class="form-control" id="phone" name="phone" placeholder="Enter Phone"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection