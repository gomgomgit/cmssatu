<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="/css/main.css">

	{{-- owlcarousel --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

	<style type="text/css">
		.f-pts {
			font-family: 'PT Sans', sans-serif;
		}
		.f-ubuntu {
			    font-family: 'Ubuntu', sans-serif;
		}
	</style>
</head>
<body>
	<nav class="bg-gray-800 border-b-4 border-orange-500">
		<div class="flex items-center justify-between flex-wrap px-32">
			<div>
			  <div class="flex items-center flex-shrink-0 text-white mr-6">
			    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
			    <span class="font-extrabold text-4xl tracking-tight">SUP?</span>
			  </div>
			  <div class="block lg:hidden">
			    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
			      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			    </button>
			  </div>
			</div>
			<div class="flex w-full block items-center lg:w-auto">
			    <div class="text-sm lg:flex-grow">
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-500 hover:text-white text-xl font-bold">
			        Docs
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-500 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-500 hover:text-white text-xl font-bold">
			        Blog
			      </a>
			    </div>
			</div>
		</div>
	</nav>

	<div class="h-full px-64 py-12 w-full bg-white border-b-4 border-orange-500 " style="height: 600px;">
		<div class="slider owl-theme">
			<div class="item">
				<div
				class="h-full w-full bg-cover" style="background-image: url(https://i.pinimg.com/originals/87/08/39/87083943e97792b46b0d8194243af949.jpg);"
				>
					<div class="px-16 py-32">
						<h2 class="font-extrabold text-6xl text-gray-200 f-pts">THE LAST DANCE</h2>
						<h3 class="font-bold text-2xl text-gray-300">CHICAGO BULLS -- 1988</h3>
					</div>
				</div>
			</div>
			<div class="item">
				<div
				class="h-full w-full bg-cover" style="background-image: url(https://i.pinimg.com/originals/87/08/39/87083943e97792b46b0d8194243af949.jpg);"
				>
					<div class="px-16 py-32">
						<h2 class="font-extrabold text-6xl text-gray-200 f-pts">THE LAST DANCE</h2>
						<h3 class="font-bold text-2xl text-gray-300">CHICAGO BULLS -- 1988</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="px-32 py-16 bg-gray-800">
		<h3 class="font-bold text-4xl f-ubuntu text-white mb-10 border-b-2 border-gray-700 py-5">Hot news</h3>

		<div class="grid grid-cols-4 grid-flow-col gap-4">
			<div class="">
				<div class="max-w-sm rounded overflow-hidden shadow-lg">
					<div class="p-1 border-2 border-gray-700">
				  		<img class="w-full" src="https://i.insider.com/5ec2038019182438795d88b3?width=1100&format=jpeg&auto=webp" alt="Sunset in the mountains">

					</div>
				  <div class="px-6 py-4">
				    <div class="font-bold text-2xl mb-2 text-orange-500 hover:text-white cursor-pointer inline-block"><a href="/article/1">The Coldest Sunset</a></div>
				    <p class="text-gray-100 text-base">
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
				    </p>
				  </div>
				  <div class="px-6 py-4">
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#photography</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#travel</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100">#winter</span>
				  </div>
				</div>
			</div>
			<div class="">
				<div class="max-w-sm rounded overflow-hidden shadow-lg">
					<div class="p-1 border-2 border-gray-700">
				  		<img class="w-full" src="https://i.insider.com/5ec2038019182438795d88b3?width=1100&format=jpeg&auto=webp" alt="Sunset in the mountains">

					</div>
				  <div class="px-6 py-4">
				    <div class="font-bold text-2xl mb-2 text-orange-500 hover:text-white cursor-pointer inline-block"><a href="/article/1">The Coldest Sunset</a></div>
				    <p class="text-gray-100 text-base">
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
				    </p>
				  </div>
				  <div class="px-6 py-4">
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#photography</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#travel</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100">#winter</span>
				  </div>
				</div>
			</div>
			<div class="">
				<div class="max-w-sm rounded overflow-hidden shadow-lg">
					<div class="p-1 border-2 border-gray-700">
				  		<img class="w-full" src="https://i.insider.com/5ec2038019182438795d88b3?width=1100&format=jpeg&auto=webp" alt="Sunset in the mountains">

					</div>
				  <div class="px-6 py-4">
				    <div class="font-bold text-2xl mb-2 text-orange-500 hover:text-white cursor-pointer inline-block"><a href="/article/1">The Coldest Sunset</a></div>
				    <p class="text-gray-100 text-base">
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
				    </p>
				  </div>
				  <div class="px-6 py-4">
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#photography</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#travel</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100">#winter</span>
				  </div>
				</div>
			</div>
			<div class="">
				<div class="max-w-sm rounded overflow-hidden shadow-lg">
					<div class="p-1 border-2 border-gray-700">
				  		<img class="w-full" src="https://i.insider.com/5ec2038019182438795d88b3?width=1100&format=jpeg&auto=webp" alt="Sunset in the mountains">

					</div>
				  <div class="px-6 py-4">
				    <div class="font-bold text-2xl mb-2 text-orange-500 hover:text-white cursor-pointer inline-block"><a href="/article/1">The Coldest Sunset</a></div>
				    <p class="text-gray-100 text-base">
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
				    </p>
				  </div>
				  <div class="px-6 py-4">
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#photography</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2">#travel</span>
				    <span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100">#winter</span>
				  </div>
				</div>
			</div>
			</div>


		<div class="grid grid-cols-4 gap-4">
			<div class="my-12 col-span-3">
				<div class="">
					<h3 class="font-bold text-4xl f-ubuntu text-white  mb-10 border-b-2 border-gray-700 py-5">For You</h3>

					<div class="grid grid-cols-1 gap-3">
						<div class="max-w-sm w-full lg:max-w-full lg:flex">
							<div class="h-48 lg:h-auto w-48 flex-none rounded border-2 border-gray-700 text-center overflow-hidden p-1">
							  <div class="h-full w-full bg-cover" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/a/ae/Michael_Jordan_in_2014.jpg')" title="Woman holding a mug">
							  </div>

							</div>
						  <div class="bg-transparent rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
						    <div class="mb-8">
						      <p class="text-sm text-gray-600 flex items-center">
						        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						          <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
						        </svg>
						        Members only
						      </p>
						      <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
						      <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
						    </div>
						    <div class="flex items-center">
						      <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg">
						      <div class="text-sm">
						        <p class="text-gray-900 leading-none">Jonathan Reinink</p>
						        <p class="text-gray-600">Aug 18</p>
						      </div>
						    </div>
						  </div>
						</div>

					</div>


				</div>
			</div>

			<div class="col-span-1 mt-12">
				<div class="sticky top-0">
					<h4 class="font-bold text-4xl f-ubuntu text-white  mb-10 border-b-2 border-gray-700 py-5">Top Category</h4>
					<div class="w-full bg-white p-5 f-ubuntu rounded">
						<ul class="list-disc list-inside font-bold">
							<li>Sport</li>
							<li>Sport</li>
							<li>Sport</li>
							<li>Sport</li>
							<li>Sport</li>
							<li>Sport</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $(".slider").owlCarousel({
		  	loop:true,
		  	    margin:10,
		  	    nav:true,
		  	    responsive:{
		  	        0:{
		  	            items:1
		  	        },
		  	        600:{
		  	            items:3
		  	        },
		  	        1000:{
		  	            items:5
		  	        }
		  	    }
		  });
		});
	</script>
</body>
</html>
