@extends('layouts.admin')

@section('content')

<h2 class="mt-3 mb-3">Add Product</h2>




<div class="row">
    <div class="col-md-10">

        <div class="progress" style="height: 35px; margin-bottom: 10px;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Product Details</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Product Images</div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Product Variants</div>
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 25%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Availability</div>
        </div>

        <div class="card">


        <div class="card-header">
        <h5 class="card-title">Product Images</h5>
                <h6 class="card-subtitle mb-2 text-muted">You can upload upto 18 images per product</h6>
                
  </div>


            <div class="card-body">

         

                <div id="preview" class="mb-3"></div>
                <form method="POST" action="{{url('/manage/products/1/images')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">

                        <div class="col-md-6">

                            <div class="custom-file" id="fileupload">
                                <input id="browse" type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="customFileLangHTML">
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Image">Please select an image</label>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>


                        </div>
                    </div>




             
                    <button type="submit" class="btn btn-outline-primary">
                        Upload the Image
                    </button>

               





                </form>
            </div>

            <div class="card-footer">


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Continue to product variants
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    No Image to upload
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


</div>



        </div>
    </div>
</div>

@endsection