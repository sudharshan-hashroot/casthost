
//bitrate counter--------------------
function bitrateplus(num) {
    var bitvalue = parseFloat($('.hiddenval' + num).val());
    var bitprice = parseFloat($('.price' + num).text());
    var quantity = parseFloat($('#quantity' + num).text());


    if (quantity == 64) {
        $('#quantity' + num).text(quantity * 2);
         $('.price' + num).text((bitvalue + bitprice).toFixed(2));
          window.newval=$('.price'+ num).text();
          if (num%2 == 0){
            window.configbit="&configoption[112]=396";
          }
          else{
            window.configbit="&configoption[156]=417";  
          }
        
    } else
    if (quantity == 128) {
        $('#quantity' + num).text(quantity * 2);
        $('.price' + num).text((bitvalue + bitprice  ).toFixed(2));
         window.newval=$('.price' + num).text();
         if (num%2 == 0){
            window.configbit="&configoption[112]=397";
          }
          else{
            window.configbit="&configoption[156]=418";  
          }

    } else
    if (quantity == 256) {
        $('#quantity' + num).text(quantity + 64);
        $('.price' + num).text((bitvalue + bitprice).toFixed(2));
         window.newval=$('.price' + num).text();
         if (num%2 == 0){
            window.configbit="&configoption[112]=231";
          }
          else{
            window.configbit="&configoption[156]=415";  
          }   
     

    } else
    if (quantity == 320) {
        $('#quantity' + num).text(quantity);
         window.newval=$('.price' + num).text();
    }
    console.log("globalval:"+(window.newval));

}

function bitrateminus(num) {
    var bitvalue = parseFloat($('.hiddenval' + num).val());
    var bitprice = parseFloat($('.price' + num).text());
    var quantity = parseFloat($('#quantity' + num).text());

    if (quantity == 64) {
        $('#quantity' + num).text(quantity);
        window.newval=$('.price' + num).text();
    } else
    if (quantity == 128) {
        $('#quantity' + num).text(quantity / 2);
        $('.price' + num).text((bitprice - bitvalue).toFixed(2));
         window.newval=$('.price' + num).text();
         if (num%2 == 0){
            window.configbit="&configoption[112]=395";
          }
          else{
            window.configbit="&configoption[156]=416";  
          }
    } else
    if (quantity == 256) {
        $('#quantity' + num).text(quantity / 2);
        $('.price' + num).text((bitprice - bitvalue).toFixed(2));
         window.newval=$('.price' + num).text();
         if (num%2 == 0){
            window.configbit="&configoption[112]=396";
          }
          else{
            window.configbit="&configoption[156]=417";  
          }

    } else
    if (quantity = 320) {
        $('#quantity' + num).text(quantity - 64);
        $('.price' + num).text((bitprice - bitvalue).toFixed(2));
         window.newval=$('.price' + num).text();
         if (num%2 == 0){
            window.configbit="&configoption[112]=397";
          }
          else{
            window.configbit="&configoption[156]=418";  
          }
    }
    console.log("globalval:"+(window.newval));
}
//bitrate counter--------------------


function storageprice(num,storage,sprice,dj){
    $('.storagevalue'+num).text(storage);
    $('.storagebtn'+num).parent().removeClass('open');
    var spriceval = parseFloat(sprice);
    var bitvalue = parseFloat($('.hiddenval' + num).val());
    var bitprice = parseFloat($('.price' + num).text());
    var quantity = parseFloat($('#quantity' + num).text());
    var newval = parseFloat(window.newval);
    if (isNaN(newval)){
        var newval = bitvalue;
    }

    if(sprice == 0){

        if (num%2 == 0){
            window.configdj="&configoption[108]=401";
          }
          else{
            window.configdj="&configoption[155]=414";  
          }


        if (quantity == 64) {
            ($('.price' + num).text(bitvalue));
            window.newval=$('.price' + num).text();
            
        }else
        if (quantity == 128) {
            ($('.price' + num).text(bitvalue*2));
            window.newval=$('.price' + num).text();
        } else
        if (quantity == 256) {
            ($('.price' + num).text(bitvalue*3));
            window.newval=$('.price' + num).text();
    
        } else
        if (quantity == 320) {
            ($('.price' + num).text(bitvalue*4));
            window.newval=$('.price' + num).text();
        }

    }else{
        $('.price' + num).text(spriceval + newval);
        console.log("storageval:"+spriceval+", globalval:"+newval);
    } 
    
}



$('.buynow ').on('click', function (event) {
    console.log('working');    
    var button = $(this);
    var shoutcast = button.data('link1');
    var icecast = button.data('link2') ;
    var modal = $('#provider');
    modal.find('#shoutcastlink').attr('href',shoutcast+configbit+configdj);
    modal.find('#icecastlink').attr('href',icecast+configbit+configdj);
    console.log(shoutcast+configbit+configdj);
   
  });