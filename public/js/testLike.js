$(document).ready(function(){
  //$("#msg").hide();
  //alert("working");
  $("#btn_like").click(function(){
    $("#msg").show();
    var person_ID = $(this).val()
    $.ajax({
      type: "post",
      data: "&id_person=" + person_ID,
      url: '{{ route('postLikeTest02') }}',
      success:function(data){
        $("#msg").html("Like complete");
        $("#msg").fadeOut(2000);
      }
  });
});
