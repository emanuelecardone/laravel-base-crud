@extends('layouts.app')

@section('page_title')
    {{$comic['title']}}
@endsection

@section('main_content')
    
    <section class="comics_list">
        
        <img src="{{$comic->thumb}}" alt="">
        <h2>Title: {{$comic->title}}</h2>
        <h3>Series: {{$comic->series}}</h3>
        <h3>Price: {{$comic->price}}</h3>
        <h4>Type: {{$comic->type}}</h4>
        <h4>Sale date: {{$comic->sale_date}}</h4>
        <p>Description: {!!$comic->description!!}</p>

        <div><a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a></div>
            <div>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Comic?')">Cancella</button>
                </form>
            </div>
    
    </section>
    

@endsection
