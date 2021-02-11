@extends('layout.app')
{{-- @include('Pages.add') --}}
@section('content')
    <div class="content">
        <h1 class="text-center">Laravel Testing</h1>
        <a href="{{ route('testTodos.create') }}" class="btn btn-primary" >Add New</a>

        <div class="table">
            <table class="table table-bordered">
                <tr>
                    <thead>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </thead>
                </tr>
                <tbody>
                    @foreach ($projects as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->firstname }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>
                            <form action="{{ route('testTodos.destroy',$item->id) }}" method="post">
                                <a href="{{ route('testTodos.edit',$item->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('testTodos.show',$item->id) }}" class="btn btn-success">Show</a>
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
