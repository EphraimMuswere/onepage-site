@extends('adminlte::page')

@section('title', 'Edit About Section')

@section('content_header')
    <h1>Edit About Section</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Update About Information</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $about->title) }}" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $about->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="features">Features (JSON)</label>
                    <textarea class="form-control @error('features') is-invalid @enderror" id="features" name="features" rows="3" required>{{ old('features', json_encode($about->features)) }}</textarea>
                    @error('features')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Enter features as a JSON array, e.g., ["Feature 1", "Feature 2"]</small>
                </div>

                <div class="form-group">
                    <label for="ceo_name">CEO Name</label>
                    <input type="text" class="form-control @error('ceo_name') is-invalid @enderror" id="ceo_name" name="ceo_name" value="{{ old('ceo_name', $about->ceo_name) }}" required>
                    @error('ceo_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ceo_image">CEO Image</label>
                    <input type="file" class="form-control @error('ceo_image') is-invalid @enderror" id="ceo_image" name="ceo_image">
                    @error('ceo_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if ($about->ceo_image)
                        <br>
                        <img src="{{ asset('storage/ceo_images/' . $about->ceo_image) }}" alt="Current CEO Image" width="150">
                    @endif
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $about->phone_number) }}" required>
                    @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="years_of_experience">Years of Experience</label>
                    <input type="number" class="form-control @error('years_of_experience') is-invalid @enderror" id="years_of_experience" name="years_of_experience" value="{{ old('years_of_experience', $about->years_of_experience) }}" required>
                    @error('years_of_experience')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Main Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if ($about->image)
                        <br>
                        <img src="{{ asset('storage/about_images/' . $about->image) }}" alt="Current About Image" width="150">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update About Section</button>
            </form>
        </div>
    </div>
@stop
