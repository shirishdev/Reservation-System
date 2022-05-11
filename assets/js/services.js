    // <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
          

  
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
  