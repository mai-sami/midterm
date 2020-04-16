@extends('layout.app')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>
{{-- <h1>CRUD app</h1> --}}

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <div><i class="fa fa-fw fa-plus-circle"></i>
    <strong>Add User</strong>
    <a href="{{ route('tasks.create')}}" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>     Add User  </a>
</div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td >Record Date</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->created_at}}</td>
            <td class="text-center">
                <a href="{{ route('tasks.edit', $students->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('tasks.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

</body>
@endsection
</html>

