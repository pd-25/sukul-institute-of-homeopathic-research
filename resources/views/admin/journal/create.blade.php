@extends('admin.layout.main')
@section('title', 'Create Journal | ')
@section('content')
    <style>
        .mt-9 {
            margin-top: 163px;
        }
    </style>
    <section class="section dashboard">
        <div class="row">
            <form action="{{ route('journal.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Journal</h5>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote" name="description" class="form-control" required cols="30" rows="10"></textarea>
                                    @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" required>
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save Journal</button>
                        <a href="{{ route('journal.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')


@endsection
