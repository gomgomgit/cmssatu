@extends('admin.layouts.app')

@section('title', 'User')

@section('body')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">List User</h6>
        </div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datas as $data)

                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->role }}</td>
                                <td>
                                    <a href="{{ route('admin.users.show', $data->id) }}">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="user"></i></button>
                                    </a>

                                    <a href="{{ route('admin.users.edit', $data->id) }}">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-3"></i></button>
                                    </a>

                                    <form class="d-inline-block" method="post" action="{{ route('admin.users.delete', $data->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </form>

                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>

                <div class="float-right">
                    {{ $datas->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection

@section('end-script')
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
@endsection
