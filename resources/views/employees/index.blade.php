@extends('../layouts/app') 
@section('content')
<div class="col-md-12">

    <div class="table-responsive">
        <table class="table table-bordered table-condensed table-striped">
            <thead class="table-dark">
                <th>ID</th>
                <th>NAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>ACTION</th>
            </thead>

            <tbody>
                @foreach($data as $row)
                <tr>

                    <td>{{$row->id }}</td>
                    <td>{{$row->name }}</td>
                    <td>{{$row->lastname }}</td>
                    <td>{{$row->email }}</td>
                    <td>{{$row->phone }}</td>

                    <td>
                        <a href="{{ route('employees.edit', $row->id)}}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('employees.destroy', $row->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <?php echo $data->render(); ?>
    </div>
</div>

@endsection