@extends('layouts.app')
@section('content')
<section class="bg-gradient-to-t from-sky-500 to-indigo-500 min-h-screen text-white">
  <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class=" mb-4 text-4xl font-semibold uppercase tracking-widest leading-none md:text-5xl lg:text-6xl">{{ config('app.name') }}</h1>
    <p class="mb-8 text-lg font-light lg:text-xl sm:px-16 lg:px-48">This awesome blog has many articles, click the button below to see them</p>
    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
      <a href="/blog" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-light text-center text-white tracking-wider uppercase rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
        Show Blog
      </a>
    </div>
  </div>
</section>
@endsection