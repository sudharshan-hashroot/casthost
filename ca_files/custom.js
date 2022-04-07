
//bitrate counter--------------------
function bitrateplus(num) {
    var bitvalue = parseFloat($('.hiddenval' + num).val());
    var bitprice = parseFloat($('.price' + num).text());
    var quantity = parseFloat($('#quantity' + num).text());


    if (quantity == 64) {
        $('#quantity' + num).text(quantity * 2);
         $('.price' + num).text((bitvalue + bitprice).toFixed(2));
          window.newval=$('.price'+ num).text();  
         $('#quantity' + num).parent().parent().parent().parent().find('.audiobitrate').attr('src','https://securestream.casthost.net:8223/128');
         stopaudio();
         
    } else
    if (quantity == 128) {
        $('#quantity' + num).text(quantity * 2);
            $('.price' + num).text((bitvalue + bitprice  ).toFixed(2));
         window.newval=$('.price' + num).text();  
         $('#quantity' + num).parent().parent().parent().parent().find('.audiobitrate').attr('src','https://securestream.casthost.net:8223/256');
         stopaudio();
    } else
    if (quantity == 256) {
        $('#quantity' + num).text(quantity + 64);
        $('.price' + num).text((bitvalue + bitprice).toFixed(2));
         window.newval=$('.price' + num).text();
         $('#quantity' + num).parent().parent().parent().parent().find('.audiobitrate').attr('src','https://securestream.casthost.net:8223/320');
         stopaudio();
        } else
    if (quantity == 320) {
        $('#quantity' + num).text(quantity);
         window.newval=$('.price' + num).text();
         stopaudio();
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
         $('#quantity' + num).parent().parent().parent().parent().find('.audiobitrate').attr('src','https://securestream.casthost.net:8223/64');
         stopaudio();
    } else
   
    if (quantity == 256) {
        $('#quantity' + num).text(quantity / 2);
        $('.price' + num).text((bitprice - bitvalue).toFixed(2));
         window.newval=$('.price' + num).text();
         $('#quantity' + num).parent().parent().parent().parent().find('.audiobitrate').attr('src','https://securestream.casthost.net:8223/128');
         stopaudio();

    } else
    if (quantity = 320) {
        $('#quantity' + num).text(quantity - 64);
        $('.price' + num).text((bitprice - bitvalue).toFixed(2));
         window.newval=$('.price' + num).text();
         $('#quantity' + num).parent().parent().parent().parent().find('.audiobitrate').attr('src','https://securestream.casthost.net:8223/256');
         stopaudio();
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

        if (quantity == 64) {
            ($('.price' + num).text(bitvalue));
            window.newval=$('.price' + num).text();
            
        }else
        if (quantity == 128) {
            ($('.price' + num).text(bitvalue*2));
            window.newval=$('.price' + num).text();
        } else
        if (quantity == 192) {
            ($('.price' + num).text(bitvalue*3));
            window.newval=$('.price' + num).text();
    
        } else
        if (quantity == 256) {
            ($('.price' + num).text(bitvalue*4));
            window.newval=$('.price' + num).text();
    
        } else
        if (quantity == 320) {
            ($('.price' + num).text(bitvalue*5));
            window.newval=$('.price' + num).text();
        }

    }else{
        $('.price' + num).text(spriceval + newval);
        console.log("storageval:"+spriceval+", globalval:"+newval);
    } 
    
}


$('.buynow ').on('click', function (event) {
    
    var button = $(this);
    var shoutcast = button.data('link1');
    var icecast = button.data('link2') ;
    var shoutcanada = button.attr('shoutcanada');
    var icecanada = button.attr('icecanada');
    var modal = $('#provider');
    var shoutlocation = $("select[name='shoutcastvalue']");
    var icelocation = $("select[name='icecastvalue']");
    shoutlocation.val('usa')
    icelocation.val('usa')

   

     window.configdj='';
     window.configbit='';


    let cbit= $(this).parent().parent().find('.configbit').text();
    let cdj= $(this).parent().parent().find('.configdj').text();
    let pl= $(this).parent().parent().find('.ptype').text();

   
    if(pl=='Starter plan'){
        if(cbit == '64'){
            configbit = '&configoption[156]=416';
            configdj = getdjval(cdj);
        }else
        if(cbit == '128'){
            configbit = '&configoption[156]=417';
            configdj =getdjval(cdj);
        }else
        if(cbit == '256'){
            configbit = '&configoption[156]=418';
            configdj =getdjval(cdj);
        }else
        if(cbit == '320'){
            configbit = '&configoption[156]=415';
            configdj =getdjval(cdj);
        }

      

    }else
    if(pl=='Unlimited plan'){
        if(cbit == '64'){
            configbit = '&configoption[112]=395';
            configdj = getdjvalun(cdj);
        }else
        if(cbit == '128'){
            configbit = '&configoption[112]=396';
            configdj =getdjvalun(cdj);
        }else
        if(cbit == '192'){
            configbit = '&configoption[112]=420';
            configdj =getdjvalun(cdj);
        }else
        if(cbit == '256'){
            configbit = '&configoption[112]=397';
            configdj =getdjvalun(cdj);
        }else
        if(cbit == '320'){
            configbit = '&configoption[112]=231';
            configdj = getdjvalun(cdj);
        }



        // console.log(cbit+','+cdj+','+pl);

    }
    modal.find('#shoutcastlink').attr('href',shoutcast+configbit+configdj);
    modal.find('#icecastlink').attr('href',icecast+configbit+configdj);

   
    shoutlocation.on('change', function() {
      if($(this).val() == 'canada'){
        modal.find('#shoutcastlink').attr('href',shoutcanada+configbit+configdj);
      }else{
        modal.find('#shoutcastlink').attr('href',shoutcast+configbit+configdj);
      }
      });
      icelocation.on('change', function() {
        if($(this).val() == 'canada'){
          modal.find('#icecastlink').attr('href',icecanada+configbit+configdj);
        }else{
          modal.find('#icecastlink').attr('href',icecast+configbit+configdj);
        }
        });
    
   
  });


  function getdjval(cdj){
    if(cdj == '512 MB'){
        configdj = '&configoption[155]=414';
    }else
    if(cdj == '2 GB'){
        configdj = '&configoption[155]=413';
    }else
    if(cdj == '5 GB'){
        configdj = '&configoption[155]=410';
    }else
    if(cdj == '10 GB'){
        configdj = '&configoption[155]=411';
    }else
    if(cdj == '25 GB'){
        configdj = '&configoption[155]=412';
    }else
    if(cdj == '50 GB'){
        configdj = '&configoption[155]=419';
    }
    return configdj;

  }

function stopaudio(){
    $('audio').each(function(){
        // this.pause(); // Stop playing
        this.currentTime = 0; // Reset time
    }); 
}

  function getdjvalun(cdj){
    if(cdj == '5 GB'){
        configdj = '&configoption[108]=401';
    }else
    if(cdj == '10 GB'){
        configdj = '&configoption[108]=225';
    }else
    if(cdj == '25 GB'){
        configdj = '&configoption[108]=398';
    }else
    if(cdj == '50 GB'){
        configdj = '&configoption[108]=399';
    }else
    if(cdj == '100 GB'){
        configdj = '&configoption[108]=400';
    }
    return configdj;

  }