@extends('layouts.app')
@section('title', 'Modify a Show')

@section('content')
<div class="title m-b-md">
    Modify a Show
</div>
<div class="form">
        <form class="" action="/updateaction" method="post">
            @csrf
                <input type="hidden" class="btn"  name="id" value="{{ $serie->id }}">
            <div class="form-group">
                <label for="exampleInputSerie1">Title serie</label>
                <input required type="text" class="form-control" name="title" value="{{ $serie->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputNumber1">Year of publication</label>
                <input required type="number" class="form-control" name="publication_year" value="{{ $serie->publication_year }}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">actors</label>
                </div>
                <select name="actors" class="custom-select" id="inputGroupSelect01">
                    @foreach ($actors as $actor)
                        @if ($actor->id  ==  $serie->actors[0]->id)
                            <option value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
                        @else
                            <option value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">genres</label>
                </div>
                <select name="genres" class="custom-select" id="inputGroupSelect01">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>
            <div>
            <button type="submit" class="btn btn-primary" name="" value="Insert">insert</button>
            </div>
        </form>
</div>
@endsection
