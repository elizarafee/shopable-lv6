<?php 


function product_types() {

        return \App\ProductType::where('active', 1)->get(['id','name'])->toArray();

}
