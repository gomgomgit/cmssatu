@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('body')

    <?php
use App\Model\Article;
use App\Model\Category;
use App\Model\User;

$datas = [
    [
        'title' => 'User',
        'total' => User::count(),
        'icon' => 'fa-user',
    ],

    [
        'title' => 'Article',
        'total' => Article::count(),
        'icon' => 'fa-calendar',
    ],

    [
        'title' => 'Category',
        'total' => Category::count(),
        'icon' => 'fa-bars',
    ],

]
?>

    <div class="row">
      @foreach($datas as $key => $data)
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $data['title'] }}</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['total'] }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas {{ $data['icon'] }} fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach

@endsection
