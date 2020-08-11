@extends('admin.layouts.app')

@section('title', 'Category')

@section('body')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.categories.update', $data->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="text-primary">Name</label>
                    <input class="form-control" id="inputName" type="text" placeholder="Category" name="name" value="{{ $data->name }}">
                </div>

                <div class="form-group">
                    <input type="submit" value="Edit Category">
                </div>
            </form>

        </div>
      </div>
@endsection
