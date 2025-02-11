@extends('adminlte::page')

@section('title', 'Create Pricing Plan')

@section('content_header')
    <h1>Create Pricing Plan</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pricing.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="plan_name" class="form-label">Plan Name</label>
                    <input type="text" name="plan_name" class="form-control" value="{{ old('plan_name') }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="features" class="form-label">Features</label>
                    <div id="features-container">
                        <input type="text" name="features[]" class="form-control mb-2" placeholder="Feature 1">
                    </div>
                    <button type="button" id="add-feature" class="btn btn-primary btn-sm">Add Feature</button>
                </div>

                <button type="submit" class="btn btn-primary">Save Pricing Plan</button>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script>
        // JavaScript to dynamically add features input fields
        document.getElementById('add-feature').addEventListener('click', function() {
            const featureInput = document.createElement('input');
            featureInput.type = 'text';
            featureInput.name = 'features[]';
            featureInput.classList.add('form-control', 'mb-2');
            featureInput.placeholder = 'Feature ' + (document.querySelectorAll('#features-container input').length + 1);
            document.getElementById('features-container').appendChild(featureInput);
        });
    </script>
@stop
