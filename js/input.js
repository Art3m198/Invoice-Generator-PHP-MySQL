$("#name,#country,#state,#city,#address1,#address2,#product1,#product2,#product3,#product4,#product5,#signature").on('keyup', function(e) {
    var arr = $(this).val().split('.');
    var result = '';
    for (var x = 0; x < arr.length; x++) {
        result += arr[x].replace(/^\s+/, '').charAt(0).toUpperCase() + arr[x].replace(/^\s+/, '').slice(1) + '. ';
    }
    $(this).val(result.substring(0, result.length - 2));
  });



  $("#product1").on('keyup', function(e) {
    var val = $("#product1").val();
    if (val == ""){
    document.getElementById('quantity1').value = ''
    document.getElementById('cost1').value = ''
    document.getElementById('total1').value = ''
}
});

$("#product2").on('keyup', function(e) {
    var val = $("#product2").val();
    if (val !== ""){
    $("#quantity2,#cost2").prop('required', true);
    document.getElementById('quantity2').disabled = false;
    document.getElementById('cost2').disabled = false;
    }
    else{$("#quantity2,#cost2").prop('required', false);
    document.getElementById('quantity2').value = ''
    document.getElementById('cost2').value = ''
    document.getElementById('quantity2').disabled = true;
    document.getElementById('cost2').disabled = true;
    document.getElementById('total2').value = ''
}


});

$("#product3").on('keyup', function(e) {
    var val = $("#product3").val();
    if (val !== ""){
    $("#quantity3,#cost3").prop('required', true);
    document.getElementById('quantity3').disabled = false;
    document.getElementById('cost3').disabled = false;
    }
    else{$("#quantity2,#cost3").prop('required', false);
    document.getElementById('quantity3').value = ''
    document.getElementById('cost3').value = ''
    document.getElementById('quantity3').disabled = true;
    document.getElementById('cost3').disabled = true;
    document.getElementById('total3').value = ''
}
var val2 = $("#product4").val();
if (val2 == ""){
document.getElementById('product4').disabled = true;
document.getElementById('product5').disabled = true;
}
else{
document.getElementById('product4').disabled = false;
document.getElementById('product5').disabled = true;
}
});

$("#product4").on('keyup', function(e) {
    var val = $("#product4").val();
    if (val !== ""){
    $("#quantity4,#cost4").prop('required', true);
    document.getElementById('quantity4').disabled = false;
    document.getElementById('cost4').disabled = false;
    }
    else{$("#quantity4,#cost4").prop('required', false);
    document.getElementById('quantity4').value = ''
    document.getElementById('cost4').value = ''
    document.getElementById('quantity4').disabled = true;
    document.getElementById('cost4').disabled = true;
    document.getElementById('total4').value = ''
}
var val2 = $("#product5").val();
if (val2 == ""){
document.getElementById('product5').disabled = true;
}
else{
document.getElementById('product4').disabled = false;
document.getElementById('product5').disabled = true;
}
});

$("#product5").on('keyup', function(e) {
    var val = $("#product5").val();
    if (val !== ""){
    $("#quantity5,#cost5").prop('required', true);
    document.getElementById('quantity5').disabled = false;
    document.getElementById('cost5').disabled = false;
    }
    else{$("#quantity5,#cost5").prop('required', false);
    document.getElementById('quantity5').value = ''
    document.getElementById('cost5').value = ''
    document.getElementById('quantity5').disabled = true;
    document.getElementById('cost5').disabled = true;
    document.getElementById('total5').value = ''
}
});

$("#cost1").on('keyup', function(e) {
    var val = $("#cost1").val();
    if (val !== ""){
        document.getElementById('product2').disabled = false;
        }
});

$("#cost2").on('keyup', function(e) {
    var val = $("#cost2").val();
    if (val !== ""){
        document.getElementById('product3').disabled = false;
        }
});

$("#cost3").on('keyup', function(e) {
    var val = $("#cost3").val();
    if (val !== ""){
        document.getElementById('product4').disabled = false;
        }

});

$("#cost4").on('keyup', function(e) {
    var val = $("#cost2").val();
    if (val !== ""){
        document.getElementById('product5').disabled = false;
        }
});