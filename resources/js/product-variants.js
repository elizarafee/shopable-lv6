import $ from 'jquery';
import suggestags from 'suggestags';
import axois from 'axios';

$('.tags').amsifySuggestags({
    type : 'amsify'
});

$('.tags').on('suggestags.change', function(e){

    let variants = [];

    let variants_table = $('#variants-table tbody');

    variants.push($('input[name="variant_options[0]"]').val());
    variants.push($('input[name="variant_options[1]"]').val());
    variants.push($('input[name="variant_options[2]"]').val());
    
    axios.post('/manage/products/variants', {
        variants: variants
      })
      .then(function (response) {

        variants_table.empty();
        response.data.forEach(function(variant, index) {

            let item = '<tr id="variant-'+index+'">'+
                        '<td><input type="hidden" class="form-control" name="variants['+index+'][name]" value="'+variant+'"><strong>'+variant+'</strong></td>'+
                        '<td><input type="text" class="form-control" name="variants['+index+'][sku]" value=""></td>'+
                        '<td><input type="text" class="form-control" name="variants['+index+'][barcode]" value=""></td>'+
                        '<td><input type="text" class="form-control" name="variants['+index+'][price]" value=""></td>'+
                        '<td><input type="text" class="form-control" name="variants['+index+'][quantity]" value=""></td>'+
                        '<td><button class="variant-button" type="button" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button></td>'
                      '</tr>';
        
            variants_table.append('<tr><td>'+item+'</td></tr>');

          })
      })
      .catch(function (error) {
        console.log(error);
      });
});