$(function(){
  $("#ivesti").click(function(){
    var eilute = $("<tr></tr>");
    var namelangelis = "<td>"+$("#name").val() + "</td>";
    var surnamelangelis = "<td>"+$("#surname").val() + "</td>";
    var agelangelis = "<td>"+$("#age").val() + "</td>";
    var weightlangelis = "<td>"+$("#weight").val() + "</td>";
    eilute.html(namelangelis + surnamelangelis + agelangelis + weightlangelis);
    console.log(eilute);
    $("#lentute").append(eilute);
  });
});
