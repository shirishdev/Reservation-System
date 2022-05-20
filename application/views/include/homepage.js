$(document).ready(function () {
        $('#datepicker-inline').datepicker({
              format: "dd.mm.yyyy",
              todayHighlight: true,
            })



        $("#datepicker-inline").change(function() {
            var formattedDate = new Date($(this).datepicker("getDate"));
            var d = formattedDate.getDate();
            var m =  formattedDate.getMonth();
            m += 1;  // JavaScript months are 0-11
            var y = formattedDate.getFullYear();
            var formattedDate = d + "/" + m + "/" + y;
         
            $('#dateLabel').html(formattedDate);


      });
  //  $('#service_list').DataTable();



 });
