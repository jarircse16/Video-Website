<!-- resources/views/videos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .videos {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 90vh; /* 90% of viewport height */
            position: relative;
        }

        .video {
            overflow: hidden;
            aspect-ratio: 16/9;
            /* pointer-events: none; disable left click */
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .video iframe {
            width: 300%; /* Adjust the video width as needed */
            height: 100%; /* Adjust the video height as needed */
            margin-top: -0px;
            transform: scale(1.4);
        }

        .pagination {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            box-sizing: border-box;
            background: #f4f4f4;
        }
    </style>

    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>

    <div class="videos">
        @foreach ($videos as $video)
            <div class="video">
                <iframe src="{{ $video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @endforeach
        <!-- Previous and Next links -->
        <div class="pagination">
            @if ($videos->previousPageUrl())
                <a href="{{ $videos->previousPageUrl() }}">Previous</a>
            @endif

            @if ($videos->nextPageUrl())
                <a href="{{ $videos->nextPageUrl() }}">Next</a>
            @endif
        </div>
    </div>
@endsection
