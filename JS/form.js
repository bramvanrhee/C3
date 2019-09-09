$('form-control').hover(
  function() {
    $('.collapse').collapse('show');
  }, function() {
    $('.collapse').collapse('hide');
  }
)

$("#button").click(function(){
  var naam = $("#naam").val();
  var adres = $("#adres").val();
  if (!/^[a-zA-Z ]+$/.test(naam)){
    alert("Naam is niet correct");
  }
  if (!/^[a-zA-Z$]*\s[0-9]*$/.test(adres)){
    alert("Adres is niet correct");
  }
});
