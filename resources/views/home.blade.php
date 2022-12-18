@extends('layout/layoutBase')

@section('content')
    <div class="container my_home">



        <div class="row">

            @foreach ($movies as $movie)
                <div class="col-4 p-3">
                    <div class="rounded-4 p-4" style="background-color: white;">



                        <p>
                            <strong>title: </strong>{{ $movie->title }}

                        </p>
                        <p>
                            <strong>vote: </strong>
                            {{ $movie->vote }}

                        </p>
                        <p>
                            <strong>data: </strong>
                            {{ $movie->date }}

                        </p>
                        <p>
                            <img src=" {{ $movie->image }} " alt="">
                        </p>


                    </div>
                </div>
            @endforeach

        </div>

    </div>

    <style>
        .my_home img {
            width: 100%;
        }
    </style>
@endsection
