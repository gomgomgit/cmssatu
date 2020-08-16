@extends('admin.layouts.app')

@section('title', 'Article')

@section('head-script')
@endsection

@section('body')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Article</h6>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.articles.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="form-group">
                    <label for="inputTitle" class="text-primary">Title</label>
                    <input class="form-control" id="inputTitle" type="text" placeholder="Title" name="title" value="{{ old('title',$data->title) }}">
                </div>

                <div class="form-group">
                    <label for="inputCategory" class="text-primary">Category</label>
                    <select class="form-control" name="category_id">
                        @foreach($datas as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="text-primary">Content</label>
                    <textarea class="ckeditor form-control" name="content">{{ old('content',$data->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="inputImage" class="text-primary">Post Article Image</label>
                    <input class="d-block" id="inputImage" type="file" placeholder="Title" name="image_file">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit Article">
                </div>
            </form>

        </div>
      </div>
@endsection

@section('end-script')
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection
