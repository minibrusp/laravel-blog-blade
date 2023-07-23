@extends('layouts.app')
@section('content')


<!-- component -->
<article class="min-h-screen tracking-wider text-left mx-8">

  <div class="w-full text-left mt-4 p-4 border-0 border-b border-black">
    <a href="/blog" class="group text-right mt-4 inline-flex flex-col justify-end items-center border border-l-2 border-b-2 border-black p-2 rounded-sm shadow-md">
      <span class="underline underline-offset-2 tracking-wider group-hover:no-underline">
        Go Back
      </span>
    </a>
  </div>

  <div class="max-w-2xl px-4 my-8">
    <div class="">
      <h1 class="text-4xl font-light tracking-widest font-heading">{{ ucfirst($post->title) }}</h1>
      <p class="font-light italic">
        <span>{{ $post->created_at->diffForHumans() }}</span>
      </p>
    </div>

    <div class="w-full text-left py">
      <a href="/blog/{{ $post->id }}/edit" class="group text-right mt-4 inline-flex flex-col justify-end items-center border border-l-2 border-b-2 border-black p-2 rounded-sm shadow-md">
        <span class="underline-offset-2 tracking-wider group-hover:underline">
          Edit Post
        </span>
      </a>

      <form id="delete-frm" class="inline-flex" action="" method="POST">
        @method('DELETE')
        @csrf
        <button class="group text-right mt-4 inline-flex flex-col justify-end items-center bg-red-500 text-black border border-l-2 border-b-2 border-black p-2 rounded-sm shadow-md">
          <span class="underline-offset-2 tracking-wider group-hover:underline">
            Delete Post
          </span>
        </button>
      </form>


    </div>

    <div class=" font-light">
      <p class="mb-4">{!! $post->body !!}</p>
    </div>
  </div>



</article>







@endsection