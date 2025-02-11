@extends('adminlte::page')

@section('title', 'About Section')

@section('content_header')
    <h1>About Section</h1>
@endsection

@section('content')
    <a href="{{ route('about.create') }}" class="btn btn-primary mb-3">Add About Info</a>

    @if($about)
        <div class="card">
            <div class="card-body">
                <h4>{{ $about->title }}</h4>
                <p>{{ $about->description }}</p>
                <p><strong>CEO:</strong> {{ $about->ceo_name }}</p>
                <p><strong>Phone:</strong> {{ $about->phone_number }}</p>
                <p><strong>Experience:</strong> {{ $about->years_of_experience }} years</p>
                <p><strong>Features:</strong></p>
                <ul>
                    @foreach(json_decode($about->features, true) as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                @if($about->ceo_image)
                    <img src="{{ asset('storage/' . $about->ceo_image) }}" alt="CEO Image" width="100">
                @endif
                <a href="{{ route('about.edit', $about) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('about.destroy', $about) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @endif
@endsection
