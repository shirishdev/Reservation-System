  
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


    <!-- Pignose Calender -->
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/pg-calendar/js/pignose.calendar.min.js')?>"></script>
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready(function () {
        $('#service_list').DataTable({
            "scrollX":true,
        });
            

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

<!-- (".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(300);
    } else {
        $(".answer").hide(200);
    }
}); -->

</body>

</html>