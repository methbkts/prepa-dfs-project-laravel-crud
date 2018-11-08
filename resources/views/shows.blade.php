@extends('layouts.app')
@section('title', 'List Shows')

@section('content')
<div class="title m-b-md">
    List all shows
</div>
<div class="table">
    <table class="table table-bordered table-sm">
        <thead class="thead-light">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Actor</th>
            <th scope="col">Genre</th>
            <th scope="col">Year</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
             <tr>
                <td>{{ $serie->title}}</td>
                <td>
                    @foreach ($serie->actors as $actor)
                        {{ $actor->completeName() }}</br>
                    @endforeach
                </td>
                <td>                
                    @foreach ($serie->genres as $genre)
                        {{ $genre->name }}</br>           
                    @endforeach
            </td>
                <td>{{ $serie->publication_year}}</td>
                <td>
                    <form class="" action="/deleteaction" method="post">
                    @csrf
                        <div class="form-group">
                            <input type="hidden" class="btn"  name="id" value="{{ $serie->id }}">
                            <input type="submit" class="btn  btn-danger" name="" value="X">
                     </form>
                </td>
                <td>
                    <form class="" action="/updateshow" method="post">
                    @csrf
                        <div class="form-group">
                            <input type="hidden" class="btn"  name="id" value="{{ $serie->id }}">
                            <input type="submit" class="btn  btn-info" name="" value="U">
                     </form>
                </td>
            @endforeach
        </tr>
    </tbody>
    </table>
</div>
@endsection
