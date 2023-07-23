
@extends('layouts.app')
@section('content')


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
      <h1 class="text-4xl font-light tracking-widest font-heading">Edit Post</h1>
      <p class="font-light italic">Edit and submit this form to update a post</p>
    </div>
  </div>

  <!-- component -->
  <form class="w-full max-w-lg" method="POST">
    @csrf
    @method('PUT')
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-widest font-light text-black text-lg mb-2" for="title">
          Post Title
        </label>
        <input class="appearance-none block w-full bg-white text-black font-light border border-black rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="title" type="text" name="title" placeholder="Enter Post Title" value="{{ $post->title }}" required>
        <p class="text-black text-sm italic font-light">Some tips - as long as needed</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-widest font-light text-black text-lg mb-2" for="body">
          Post Body
        </label>
        <textarea class=" no-resize appearance-none block w-full bg-white text-black font-light border border-black rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="body" name="body" placeholder="Enter Post Body" required>{{ $post->body }}</textarea>
        <p class="text-black text-sm italic font-light">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
      </div>
    </div>
    <div class="md:flex md:items-center px-3">
      <div class="md:w-1/3">
        <button class="group text-right inline-flex flex-col justify-end items-center bg-white text-black border border-l-2 border-b-2 border-black p-2 rounded-sm shadow-md" id="btn-submit">
          <span class="underline-offset-2 tracking-wider group-hover:underline">
            Edit Post
          </span>
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
  </form>


</article>



@endsection
