var app = {
  init: function() {
    console.info('App init');
    $( "#signup-form" ).click(function() {
  $( ".signup" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
});
  },

};

$(app.init);
