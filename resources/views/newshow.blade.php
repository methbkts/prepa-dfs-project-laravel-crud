@extends('layouts.app')
@section('title', 'Add a new show')

@section('content')
<div class="title m-b-md">
    Add a new show
</div>
<div class="form">
        <form class="" action="/addaction" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputSerie1">Title serie</label>
                <input required placeholder="Title" type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group">
                <label for="exampleInputNumber1">Year of publication</label>
                <input required placeholder="0000" type="number" class="form-control" name="publication" value="">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">actors</label>
                </div>
                <select name="actors" class="custom-select" id="inputGroupSelect01">
                    @foreach ($actors as $actor)
                        <option value="{{ $actor->id }}">
                            {{ $actor->completeName() }}
                        </option>
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
            </div>
            <input type="submit" class="btn btn-primary" name="" value="Insert">
        </form>
</div>
@endsection
