@extends('../layouts/app') 
@section('content')
<div class="col-md-12">

    <div class="bg-white">
        <table class="table-auto">
            <thead>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">NAME</th>
                <th class="border px-4 py-2">LASTNAME</th>
                <th class="border px-4 py-2">EMAIL</th>
                <th class="border px-4 py-2">PHONE</th>
                <th class="border px-4 py-2">ACTION</th>
            </thead>

            <tbody>
                @foreach($data as $row)
                <tr>

                    <td class="border px-4 py-2">{{$row->id }}</td>
                    <td class="border px-4 py-2">{{$row->name }}</td>
                    <td class="border px-4 py-2">{{$row->lastname }}</td>
                    <td class="border px-4 py-2">{{$row->email }}</td>
                    <td class="border px-4 py-2">{{$row->phone }}</td>

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