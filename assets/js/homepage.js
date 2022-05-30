$(document).ready(function(){

$('#datepicker-inline').datepicker({
    format: "mm/dd/yyyy",
    minDate:0,
    defaultDate:new Date($('#selected_date').val())
       // todayHighlight: true,       
});

$("#datepicker-inline").change(function() {
    var formattedDate = new Date($(this).datepicker("getDate"));
    var d = formattedDate.getDate();
    var m =  formattedDate.getMonth();
    m += 1;  // JavaScript months are 0-11
    var y = formattedDate.getFullYear();
    var formattedDate = d + "/" + m + "/" + y;
         
    $('#dateLabel').html(formattedDate);
    getServices();

    $("#datepicker").datepicker("setDate", formattedDate);

  });
 });


function getServices(){
    window.location.href="/Reservation-System/index.php/HomepageController?date="+$("#datepicker-inline").val();
}
