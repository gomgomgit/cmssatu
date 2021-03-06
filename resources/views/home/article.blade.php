<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Aladin&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

	{{-- Custom Css --}}
	<link rel="stylesheet" href="/css/custom.css">
</head>
<body>
	<nav class="bg-gray-900 border-b-4 border-orange-600 z-50">
		<div class="flex items-center justify-between flex-wrap px-48">
			<div>
			  <div class="flex items-center flex-shrink-0 text-white mr-6">
			    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
			    <span class="font-extrabold text-5xl tracking-tight f-aladin">SUP?</span>
			  </div>
			  <div class="block lg:hidden">
			    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
			      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			    </button>
			  </div>
			</div>
			<div class="flex w-full block items-center lg:w-auto">
			    <div class="text-sm lg:flex-grow">
			      <a href="/" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Home
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Blog
			      </a>
			    </div>
			</div>
		</div>
	</nav>

	<div class="bg-p-typo py-16 px-48">
		<div class="f-pts">
			<h2 class="font-bold text-5xl text-white">{{$article->title}}</h2>
			<h3 class="font-bold text-gray-500"><a class="text-orange-500" href="/">HOME</a> / THE COLDEST SUNSET</h3>
				<span class="text-gray-500 text-sm">views {{ $article->counter }} times</span>
		</div>

		<div class="grid grid-cols-3 pt-10 gap-5">

			<div class="col-span-2">
				<div class="w-full rounded mb-3">
					<div class="p-1 border-2 border-gray-700">
				  		<img class="w-full" src="/img/{{ $article->image }}">
					</div>
				</div>

				<div class="text-gray-300 f-ubuntu text-xl">
						{!! $article->content !!}
				</div>

				<div class="text-gray-500 text-sm my-4">
					<div class="mb-2">
						<span class="mr-2"><i class="mr-2 fas fa-user"></i> {{ $article->user->name }}</span>
						<span class="mr-2"><i class="mr-2 fas fa-calendar"></i> {{ date("d M Y", strtotime($article->created_at)) }}</span>
					</div>
					<div class="mb-2">
						<span class="mr-2"><i class="mr-2 fas fa-tags"></i>
							@foreach($article->tags as $tag)
							<span>{{ $tag->name }}, </span>
							@endforeach
						</span>
					</div>
					<div class="mb-2">
						<span class="mr-2"><i class="mr-2 fas fa-bookmark"></i>{{ $article->category->name }}</span>
						<span class="mr-2"><i class="mr-2 fas fa-eye"></i>{{ $article->counter }}</span>
					</div>
				</div>

				<div class="bg-gray-200 text-black mt-6 px-6 pt-5">
					<h6 class="border-b-4 border-black font-bold text-3xl mb-4">Comments</h6>

						<div class="mb-8">

							<form method="post" action="{{ route('postComment', $article->id) }}">
								@csrf
								<p>Leave a comment</p>

								<div>

									<div class="my-3">
										<input type="text" name="name" placeholder="Name" class="w-full rounded shadow p-2">
									</div>

									<div class="my-3">
										<textarea name="body" placeholder="Leave Your Comment" class="w-full rounded shadow p-2 h-32"></textarea>
									</div>

								</div>

								<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6">Send a Comment</button>
							</form>

						</div>


					@foreach($comments as $comment)
						<div class="border-t-2 border-gray-500 py-6">
							<div class="grid grid-cols-7 gap-32 f-pts">
								<div class="inline-block overflow-hidden" style="width: 120px; height: 120px;">
									<img class="w-full" src="https://rpn.co.id/beta/wp-content/uploads/2018/11/unknown-user-6.png">
								</div>
								<div class="col-span-6">
									<p class="font-bold text-xl">{{ $comment->name }}</p>
									<p class="h-16">{{ $comment->body }}</p>
									<p class="text-sm">{{ date('d M Y', strtotime($comment->created_at)) }}</p>
								</div>

							</div>

						</div>
					@endforeach
						<div class="border-t-2 border-gray-500 py-6">
							<div class="grid grid-cols-7 gap-32 f-pts">
								<div class="inline-block overflow-hidden" style="width: 120px; height: 120px;">
									<img class="w-full" src="https://rpn.co.id/beta/wp-content/uploads/2018/11/unknown-user-6.png">
								</div>
								<div class="col-span-6">
									<p class="font-bold text-xl">Admin</p>
									<p class="h-16">its so good!</p>
									<p class="text-sm">{{ date("d M Y", strtotime($article->created_at)) }}</p>
								</div>

							</div>

						</div>


				</div>

			</div>

			<div>

				<div class="px-5">
					<h3 class="font-bold text-4xl text-white pb-4 border-b-2 border-gray-700 mb-3 border-b-2 border-gray-700 py-2">Category</h3>

					{{-- <h4 class="font-bold text-4xl f-pts text-white  mb-10 border-b-2 border-gray-700 py-5">Top Category</h4> --}}
					<div class="w-full f-pts rounded p-2">
						<ul class="list-disc list-inside font-bold">
							@foreach($categories as $category)
								<li class="my-3 list-none">
									<a href="/category/{{ $category->id }}" class=" cursor-pointer hover:text-gray-100 text-orange-500"><i class="fas fa-chevron-right text-xs align-baseline"> </i> {{ Str::upper($category->name) }}</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>

				<div class="px-5">
					<h3 class="font-bold text-4xl text-white pb-4 border-b-2 border-gray-700 mb-5 border-b-2 border-gray-700 py-5">Related Article</h3>
					<div class="w-full f-ubuntu grid grid-cols-1 gap-2 text-white">
						@foreach($related as $related)

						<div class="grid grid-cols-5 gap-4">
							<div class="w-32 h-24 mr-2 col-span-2">
								<img class="object-cover h-full" src="/img/{{ $related->image }}">
							</div>
							<div class="col-span-3">
								<a href="/article/{{ $related->slug }}" class="cursor-pointer text-orange-500 hover:text-gray-100">{{ $related->title }}</a>
							</div>
						</div>

						@endforeach
					</div>
				</div>


			</div>

		</div>
	</div>



	<footer class="border-t-4 border-orange-600 bg-gray-900 px-48 py-12">
		<div class="grid grid-cols-9">
			<div class="col-span-2">
				<h5 class="text-2xl font-bold text-gray-100 mb-3">NEWS</h5>
				<span class="text-gray-400 font-bold ">
					<p><i class="fas fa-chevron-right text-xs"></i> Elementum velit</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consequat</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Ipsum dolor</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Sit amet</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consectetuer</p>
				</span>
			</div>
			<div class="col-span-2">
				<h5 class="text-2xl font-bold text-gray-100 mb-3">OVERVIEW</h5>
				<span class="text-gray-400 font-bold ">
					<p><i class="fas fa-chevron-right text-xs"></i> Elementum velit</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consequat</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Ipsum dolor</p>
				</span>
			</div>
			<div class="col-span-2">
				<h5 class="text-2xl font-bold text-gray-100 mb-3">NAVIGATION</h5>
				<span class="text-gray-400 font-bold ">
					<p><i class="fas fa-chevron-right text-xs"></i> Pellentesque sed</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consequat</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Adipiscing elit</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Colaque eunak</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Lorem ipsum</p>
				</span>
			</div>
			<div class="col-span-3">
				<div class="ml-32 w-auto">
					<div class="text-gray-100 flex justify-start mb-4">
						<div class="mr-3">
							<i class="fas fa-home text-3xl"></i>
						</div>
						<div class="text-gray-400">
							<p>Jl.Kesana 4kali, Pintu Barat</p>
							<p>98990 Sohor, Lalaisia.</p>
						</div>
					</div>
					<div class="text-gray-100 flex justify-start mb-4">
						<div class="mr-3">
							<i class="fas fa-phone text-3xl"></i>
						</div>
						<div class="text-gray-400">
							<p>Telephone: +623457890</p>
							<p>Fax: +1928374650</p>
						</div>
					</div>
					<div class="text-gray-100 flex justify-start mb-4">
						<div class="mr-3">
							<i class="fab fa-instagram text-4xl m-2"></i>
							<i class="fab fa-facebook text-4xl m-2"></i>
							<i class="fab fa-twitter text-4xl m-2"></i>
							<i class="fab fa-telegram text-4xl m-2"></i>
							<p class="align-middle font-bold text-xl m-auto w-3/5 text-gray-400">@SUP.WHAT</p>
						</div>
						<div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>

	{{-- font-awesome-5 --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

</body>
</html>
