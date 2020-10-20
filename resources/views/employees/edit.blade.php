@extends('layout')

@section('content')
    {!! F::open(['action' =>['EmployeeController@update',$data->id], 'method' => 'PUT'])!!}
    
        <div class="col-md-6">

            
			 <div class="form-group required">
				{!! F::label("NAME") !!}
				{!! F::text("name", $data->name ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

            <div class="form-group required">
				{!! F::label("LASTNAME") !!}
				{!! F::text("name", $data->name ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("EMAIL") !!}
				{!! F::text("email", $data->email ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("PHONE") !!}
				{!! F::text("phone", $data->phone ,["class"=>"form-control","required"=>"required"]) !!}
			</div>



            <div class="well well-sm clearfix">
                <button class="btn btn-success pull-right" title="Save" type="submit">Update</button>
            </div>
        </div>
        
    {!! Form::close() !!}
@endsection