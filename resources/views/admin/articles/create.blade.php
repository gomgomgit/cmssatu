@extends('admin.layouts.app')

@section('title', 'Article')

@section('head-script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
@endsection

@section('body')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Create New Article</h6>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                @csrf
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
                    <input class="form-control" id="inputTitle" type="text" placeholder="Title" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="inputCategory" class="text-primary">Category</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="text-primary">Content</label>
                    <textarea class="ckeditor form-control" name="content">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="" class="tags">Tags</label>
                    <select class="form-control js-example-tags" multiple="multiple" name="tags[]">

                    @foreach($tags as $tag)
                      <option>{{ $tag->name }}</option>
                    @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="inputImage" class="text-primary">Post Article Image</label>
                    <input class="d-block" id="inputImage" type="file" placeholder="Title" name="image_file" accept="image/*">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create Article">
                </div>
            </form>

        </div>
      </div>
@endsection

@section('end-script')
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".js-example-tags").select2({
          tags: true
        });
    });
</script>
@endsection
