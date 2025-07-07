var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
//console.log(base_url);
setInterval(function(){
    /*ajaxAccion('Inicio/usuariok',function(r) {
      if(!r.ok){
        location.reload()	
      }
    })*/
    //console.log('entro close_app ',base_url+"index.php/Inicio/usuariok");
    $.ajax({
        type: "POST",
        dataType: "json",
        url: base_url + "index.php/Inicio/usuariok",
    }).done(function (r) {
      //var r = JSON.parse(msg);
      //console.log(r);
      if(!r.ok){
        location.reload()	
      }
    })
  },30000); //5 * 60 * 1000 //5min

  $('#close_app').click(function(){
    //console.log('entro close_app ',base_url+"index.php/Usuario/salir");
    /*ajaxAccion('Usuario/salir',function(){
      location.reload()	
    })*/
    $.ajax({
        type: "POST",
        dataType: "json",
        url: base_url + "index.php/Usuario/salir",
    }).done(function (r) {
      //var r = JSON.parse(msg);
      //console.log(r);
      //if(r.ok){
        location.reload()	
      //}
    })

  })