function remove(id){
    $('#record_'+id).remove();
    total_price();
    let pos = ids.indexOf(id);
    ids.splice(pos, 1);
}
function qty(id){
    var qty = $('#quantity_'+id).val();
    var price = $('#rate_'+id).val();
    var result = Number(qty)*Number(price);
    $('#amount_'+id).val(result);
    total_price();
}
function rates(id){
    var qty = $('#quantity_'+id).val();
    var price = $('#rate_'+id).val();
    var result = Number(qty)*Number(price);
    $('#amount_'+id).val(result);  
    total_price();
}
function total_price()
{
    var total = 0;
    $('input.amount').each(function(){
            total +=Number($(this).val()); 
    });
    $('#subtotal').val(total);
}