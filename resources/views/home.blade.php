@extends('layout/layoutBase')

@section('content')
    <div class="container my_home">



        <div class="row">

            @foreach ($movies as $movie)
                <div class="col-4 p-3">
                    <div class="rounded-4 p-4" style="background-color: white;">



                        <p>
                            {{ $movie['title'] }}

                        </p>
                        <p>
                            {{ $movie['nationapty'] }}

                        </p>
                        <p>
                            {{ $movie['date'] }}

                        </p>
                        <p>
                            <img src=" {{ $movie['image'] }} " alt="">
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
