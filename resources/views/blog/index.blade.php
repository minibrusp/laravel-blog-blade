@extends('layouts.app')
@section('content')


<section class="font-main-font font-light max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 lg:py-8 mb-12 min-h-screen ">
  <article>
    <h1 class="text-2xl font-semibold tracking-widest uppercase text-gray-900 text-center mb-2"><a href="/">Our Blog!</a></h1>
    <p class="text-gray-900 text-center tracking-wider">Enjoy reading our posts. Click on a post to read!</p>
    <div class="w-full text-right mt-4 p-4">
      <a href="/blog/create/post" class="group text-right mt-4 inline-flex flex-col justify-end items-center border border-l-2 border-b-2 border-black p-2 rounded-sm shadow-md">
        <span class="text-xs">Create new Post</span>
        <span class="underline underline-offset-2 tracking-wider font-normal group-hover:no-underline">
          Add Post
        </span>
      </a>
    </div>
    <section class="mt-12 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-x-6 gap-y-8 ">

      @forelse ($posts as $post)
      <article class="group relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out text-black border border-black border-l-2 border-b-2 bg-gradient-to-r from-slate-100 to-slate-50 ">
        <div class="absolute top-4 left-4 italic">{{ $post->created_at->diffForHumans() }}</div>
        
        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center ">
          <h3 class="text-center">
            <a class="text-2xl font-light tracking-widest text-center group-hover:underline" href="./blog/{{ $post->id }}">
              {{ ucfirst($post->title) }}
            </a>
          </h3>
        </div>
      </article>
      @empty
      <p class="text-warning">No blog Posts available</p>
      @endforelse
      


    </section>
  </article>
</section>












@endsection