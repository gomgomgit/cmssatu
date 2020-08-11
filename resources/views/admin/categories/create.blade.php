@extends('admin.layouts.app')

@section('title', 'Category')

@section('body')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Create New Category</h6>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="text-primary">Name</label>
                    <input class="form-control" id="inputName" type="text" placeholder="Category" name="name">
                </div>

                <div class="form-group">
                    <input type="submit" value="Create Category">
                </div>
            </form>

        </div>
      </div>
@endsection
