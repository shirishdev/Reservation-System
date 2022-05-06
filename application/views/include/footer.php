  
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


    <script src="<?php echo base_url('assets/plugins/common/common.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js')?>"></script>
    <script src="<?php echo base_url('assets/js/gleek.js')?>"></script>
    <script src="<?php echo base_url('assets/js/styleSwitcher.js')?>"></script>

<<<<<<< HEAD
    <script src ="<?php echo base_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>

=======
>>>>>>> ae13fab256a2d9655d36982d1bdc19761cc6981a

    <!-- Pignose Calender -->
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/pg-calendar/js/pignose.calendar.min.js')?>"></script>
  
    
    <script>
    $(document).ready(function () {
    $('#service_list').DataTable();
    });
</script>

<script>
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


            // alert('uncheckd ' + day);
         });



        // $('#checkbox').click(function(){
        //     if(!('#checkbox')){
        //         $('#monday_start_time').show();
        //     }else('#checkbox'){
        //         $('#monday_start_time').hide();
        //     }
        // })
    });
</script>

<<<<<<< HEAD
    <!-- <script src="<?php echo base_url('assets/js/dashboard/dashboard-1.js')?>"></script> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.nl.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>

<script>
    $(document).ready(function () {
        $('#datepicker-inline').datepicker({
            todayHighlight: true
             
        }).on('changeDate', function(e){
       //   $('#dt_due').val(e.format('dd/mm/yyyy'))
        });


        $('#user_list').DataTable();

    $("#sel1").click(function(){
    $("p").hide();
  });
  $(".show_btn").click(function(){
    $("p").show();
  });

    });

    </script> 


=======
<!-- (".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(300);
    } else {
        $(".answer").hide(200);
    }
}); -->
>>>>>>> ae13fab256a2d9655d36982d1bdc19761cc6981a

</body>

</html>
 