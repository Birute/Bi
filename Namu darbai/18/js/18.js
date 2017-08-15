$(document).ready(function(){

  var arg1 = 0;
  var action = "";
  $("#lygu").click(function(){
    switch(action){
      case "+":
        var sum = Number(arg1) + Number($("#ats").val());
        $("#ats").val(sum);
        break;
      case "-":
        var result = Number(arg1) - Number($("#ats").val());
        $("#ats").val(result);
        break;
      case "x":
        var result = Number(arg1) * Number($("#ats").val());
        $("#ats").val(result);
        break;
      case "/":
        var result = Number(arg1) / Number($("#ats").val());
        $("#ats").val(result);
    }
  });

  $("[id^='btn']").click(function(){
    $("#ats").val(
    $("#ats").val() + $(this).text());
  });

  $("#suma").click(function(){
    arg1 = $("#ats").val();
    action = "+";
    $("#ats").val("");
  });

  $("#minusas").click(function(){
    arg1 = $("#ats").val();
    action = "-";
    $("#ats").val("");
  });

  $("#daugyba").click(function(){
    arg1 = $("#ats").val();
    action = "x";
    $("#ats").val("");
  });

  $("#dalyba").click(function(){
    arg1 = $("#ats").val();
    action = "/";
    $("#ats").val("");
  });

  $("#c").click(function(){
    $("#ats").val("");
  });

});
