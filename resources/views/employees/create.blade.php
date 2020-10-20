@extends('../layouts/app') 
@section('content')
{!! F::open(['action' =>'EmployeeController@store', 'method' => 'POST'])!!}
    
    <div class="col-md-6">
        
			<div class="form-group required">
				{!! F::label("NAME") !!}
				{!! F::text("name", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

            <div class="form-group required">
				{!! F::label("LASTNAME") !!}
				{!! F::text("name", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("EMAIL") !!}
				{!! F::text("email", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("PHONE") !!}
				{!! F::text("phone", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

   
        <div class="well well-sm clearfix">
            <button class="btn btn-success pull-right" title="Save" type="submit">Create</button>
        </div>
    </div>
 
{!! Form::close() !!}
@endsection