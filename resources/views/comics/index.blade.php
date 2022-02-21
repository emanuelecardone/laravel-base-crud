@extends('layouts.app')

@section('page_title')
    index
@endsection

@section('main_content')
    
    <section class="comics_list">
        <h1 class="mb-5">Comics list</h1>

        @forelse($comics as $comic) 
            <div class="comic_wrapper">
                <a href="{{ route('comics.show', ['comics' => $comics, 'comic' => $comic->id]) }}">{{$comic->title}}</a>
                <p>{{$comic->description}}</p>
            </div>
        @empty
            <h2>No comics were found</h2>
        @endforelse

    </section>

@endsection
