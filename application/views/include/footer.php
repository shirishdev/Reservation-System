 <!--  <?php include('include/Frontendview.js'); ?> -->
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- <script src="<?php echo base_url('assets/plugins/tables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/tables/js/datatable-init/datatable-basic.min.js'); ?>"></script> -->
   
    <script src="<?php echo base_url('assets/plugins/common/common.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js')?>"></script>
    <script src="<?php echo base_url('assets/js/gleek.js')?>"></script>
    <script src="<?php echo base_url('assets/js/styleSwitcher.js')?>"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <!-- <script src="<?php echo base_url('assets/js/services.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/js/homepage.js')?>"></script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

        
        


<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


    <!-- Pignose Calender -->
  
    
    <script>

    $(document).ready(function () {
        $('#service_list').DataTable({
            "scrollX":true,
        });
    });

    $(document).ready(function(){
        $(".dayoff_checkbox").change(function() {
            var day = $(this).data('day');

            var starttime = "#"+day+"_start_time";
            var endtime = "#"+day+"_end_time";
            var lunchstarttime = "#"+day+"_lunch_start_time";
            var lunchendtime = "#"+day+"_lunch_end_time";

           var ischecked = $(this).is(':checked');
           if (ischecked){
                $(starttime).hide();
                $(endtime).hide();
                $(lunchstarttime).hide();
                $(lunchendtime).hide();
           }else{
                $(starttime).show();
                $(endtime).show();
                $(lunchstarttime).show();
                $(lunchendtime).show();
           }
       });
});

   
       $(document).ready(function(){
             
            var day = $("#checkboxmonday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxmonday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxmonday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }
           
       var day = $("#checkboxtuesday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxtuesday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxtuesday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }

        var day = $("#checkboxwednesday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxwednesday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxwednesday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }

         var day = $("#checkboxthursday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxthursday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxthursday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }

            var day = $("#checkboxfriday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxfriday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxfriday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }

            var day = $("#checkboxsaturday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxsaturday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxsaturday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }
            
            var day = $("#checkboxsunday").data('day');
            var starttime = $("#"+day+"_start_time").val();
            var endtime =  $("#"+day+"_end_time").val();
            var lunchstarttime =  $("#"+day+"_lunch_start_time").val();
            var lunchendtime =  $("#"+day+"_lunch_end_time").val();
            if(starttime == '' && endtime== '' && lunchstarttime == '' && lunchendtime == ''){
                $("#checkboxsunday").prop('checked',true);
                  $("#"+day+"_start_time").hide();
                $("#"+day+"_end_time").hide();
                $("#"+day+"_lunch_start_time").hide();
                $("#"+day+"_lunch_end_time").hide();

            }else{
                $("#checkboxsunday").prop('checked',false);
                $("#"+day+"_start_time").show();
                $("#"+day+"_end_time").show();
                $("#"+day+"_lunch_start_time").show();
                $("#"+day+"_lunch_end_time").show();

            }


            //datepicker
            $("#bookingdatepicker").datepicker({
                format:"dd.mm.yyyy"
            });

            $('#bookingdatepicker,#service_list').change(function(){
              
              getTimeSlots();
            });

            

       });
    
 
       function  getTimeSlots(){
         

        serviceId = $('#service_list').val();
        date = $('#bookingdatepicker').val();
        if(serviceId != '' && date !=''){
            $.ajax({
                type:"POST",
                url:"<?php echo base_url(); ?>index.php/BookingsController/getTimeSlots",
                data:{"service_id":serviceId,"date":date},
                dataType:"html",
                success:function(response){
                  
                    $('.TimeSlots').html('');
                    $('.TimeSlots').html(response);
                }
            })

        }
    }



    $("#createadminbooking").validate({

        rules: {
            
          name: "required",
          email:"required",
          contact:"required",
          services:"required",
          booking_date:"required",
        },
    
        messages: {
          name: "Please enter name",
          email:"Please enter the email",
          contact:"Please enter Contact No",
          services:"Enter Services",
          booking_date:"Enter Booking Date"
       
        },
        submitHandler: function(form) {
            var starttime =  $("#start_time").val();

            $("#timeslot-error").hide();

            if(starttime == ''){
                 $("#timeslot-error").show();
                return false;
            }

           form.submit(); 
        }
  });


</script>

    
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
</body>
</html>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
