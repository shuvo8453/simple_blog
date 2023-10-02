@extends('layouts.master')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>more about us!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container mt-5">
    <form method="post" name="blog-post" action="{{ route('store-post') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="category_name">Category Name</label>
          <input type="text" class="form-control" id="category_name" name="name" placeholder="Enter category name">
        </div>

        <div class="form-group">
          <label for="slug">slug</label>
          <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter category slug">
        </div>

        <div class="form-group">
            <label for="text">Post Description</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea>
        </div>

        <div class="custom-file form-group">
            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
        <div class="form-group mt-4">
            <select class="form-control tags" name="tags[]" multiple="multiple"></select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.tags').select2({
    tags: true,
    tokenSeparators: [',', ' ']
});
    });
</script>
@endsection
