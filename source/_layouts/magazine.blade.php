@extends('_layouts.master')

@section('body')

<main class="bg-purple">

<div class="text-2xl">{{ $page->title }}</div>
<p class="text-sm">{{ $page->publication_date}}</p>

</main>

@endsection