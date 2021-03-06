@extends('admin.layouts.app')

@section('title', 'Article')

@section('head-script')
<style type="text/css">
    .contentgap {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 12ch;
    }
</style>
@endsection

@section('body')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">List Article</h6>
        </div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Content</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Content</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datas as $data)

                            {{-- @can('view', App\Model\Article::find($data->id)) --}}
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->category->name }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td class="contentgap">{{ $data->content }}</td>
                                    <td>
                                        {{-- {{ $data->tags()->count() }} --}}
                                        @foreach($data->tags as $tag)
                                            <span>{{ $tag->name }},</span>
                                        @endforeach
                                    </td>
                                    <td><img class="" style="width: 40px;" src="/img/{{ $data->image }}"></td>
                                    <td>
                                        <a href="{{ route('admin.articles.edit', $data->id) }}">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-3"></i></button>
                                        </a>

                                        <form class="d-inline-block" method="post" action="{{ route('admin.articles.delete', $data->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            {{-- @endcan --}}


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
