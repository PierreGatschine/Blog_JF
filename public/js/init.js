
//menu burger
 var elem = document.querySelector('.sidenav');
  //var instance = M.Sidenav.init(elem, options);

  // Or with jQuery

  $(document).ready(function(){
  $('.sidenav').sidenav();
  });
        
 (function($){
  $(function(){

    $('.sidenav').sidenav();
    

  }); // end of document ready
})(jQuery); // end of jQuery name space


(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space


var elem = document.querySelector('.materialboxed');
  var instance = M.Materialbox.init(elem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
