  
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

    <script src ="<?php echo base_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>


    <!-- Pignose Calender -->
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/pg-calendar/js/pignose.calendar.min.js')?>"></script>
    <!-- ChartistJS -->
    <script src="<?php echo base_url('assets/plugins/chartist/js/chartist.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')?>"></script>



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



</body>

</html>
 