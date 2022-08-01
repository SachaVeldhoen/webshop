@extends('layouts.app')

@section('content')

    <div class="uk-container">
        @if(session('success'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">Success!</h4>
                <p class="mb-0">New product was added successfully!</p>
            </div>
        @endif
        <div class="col-md-5">
            <h3 class="uk-legend">Add a Product</h3>
            <form action="/add-product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="uk-margin">
                    <input type="text"
                           class="form-control @error('name') is-invalid @enderror uk-input uk-form-width-medium"
                           name="name" placeholder="Name">
                    <span class="text-danger">
                    @error('name')
                        {{$message}}
                        @enderror
                </span>

                </div>
                <div class="uk-margin">
                    <input type="number"
                           class="form-control @error('price') is-invalid @enderror uk-input uk-form-width-medium"
                           name="price" placeholder="Price">
                    <span class="text-danger">
                    @error('price')
                        {{$message}}
                        @enderror
                </span>

                </div>
                <input type="text"
                       class="form-control @error('name') is-invalid @enderror uk-input uk-form-width-medium"
                       name="tag_id" placeholder="Tags">
                <div class="form-group">
                    <label for="file" class="form-label mt-4">Upload Product Thumbnail:</label>
                    <input
                        type="file"
                        name="thumbnail"
                        class="form-control"
                        accept="image/*"
                    >
                </div>
                <div class="form-group">
                    <label for="files" class="form-label mt-4">Upload Product Images:</label>
                    <input
                        type="file"
                        name="images[]"
                        class="form-control"
                        accept="image/*"
                        multiple
                    >
                </div>
                <div class="mt-4">
                    <button type="submit" class="uk-button uk-button-primary">Save Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
