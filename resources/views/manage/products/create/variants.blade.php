@extends('layouts.admin')

@section('content')

<h2 class="mt-3 mb-3">Add Product</h2>




<div class="row">
    <div class="col-md-10">


    <div class="progress" style="height: 35px; margin-bottom: 10px;">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25">Product Details</div>
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Product Images</div>
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25">Product Variants</div>
            <div class="progress-bar bg-info" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25">Availability</div>
        </div>

        <div class="card">

        <form method="POST" action="{{url('/manage/products/'.$product_id.'/variants')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h5 class="card-title">Product Variants</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Create product variants</h6>
                </div>

            <div class="card-body">
               
            
                    <div class="form-group row">
                        <div class="col">
                        <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th width="25%">Name</th>
                                <th width="75%">Values</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="variant_name[0]" value=""></td>
                                <td><input type="text" class="form-control tags" name="variant_options[0]" value=""></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="variant_name[1]" value=""></td>
                                <td><input type="text" class="form-control tags" name="variant_options[1]" value=""></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="variant_name[2]" value=""></td>
                                <td><input type="text" class="form-control tags" name="variant_options[2]" value=""></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- variant table-->

                    <table class="table table-sm table-bordered" id="variants-table">
                    <thead class="thead-light">
                        <tr>
                            <th width="50%">Variant</th>
                            <th width="15%">SKU</th>
                            <th width="15%">Barcode</th>
                            <th width="10%">Price</th>
                            <th width="10%" colspan="2">Qty</th>
                        </tr>
                    </thead>
                        <tbody></tbody>
                    </table>

                   </div>
                    </div>


                    


                   
            </div>

            <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary">
                        Save product variants
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection