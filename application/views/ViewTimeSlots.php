 <style type="text/css">
   th,td {
      border: 1px solid;
      padding: 5px;
      cursor: pointer;
  }
  .selected-slot{
    background-color: green !important;
    color: #fff;
}
.booked{
     background-color: red;
     pointer-events: none;
     cursor: default;
     text-decoration: none;
     color: black;
}


  
</style>
<table>
    <tbody>
        <?php
          $timeSlotArr=array_chunk($TimeSlot,5);
          foreach($timeSlotArr as $timeArr){
            ?>
            <tr>
                <?php
                foreach($timeArr as $value){
                    $class = $value['class'] == 'booked' ? 'booked' : '';
                    $selectedClass =$value['time'] == $selectedtime ? 'selected-slot' : '';
                    ?>
                    <td class="time_slots <?php echo $class; ?> <?php echo $selectedClass; ?>" data-time="<?php echo $value['time']; ?>" data-startts="<?php echo strtotime($value['time']); ?>" id="timeslot<?php echo strtotime($value['time']); ?>">
                        <?php echo $value['time']; ?>
                    </td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
  

    </tbody>
</table>

<script>

  $(document).ready(function(){

   $('.time_slots').click(function(){

     var time_slots = $(this).data('time');
     var serviceId=$('#service_list').val();
     date = $('#bookingdatepicker').val();
    $("#start_time").val(time_slots);


    var startts = $(this).data('startts');  
    var timeslotId = "#timeslot"+startts;
    $( ".time_slots" ).removeClass("selected-slot");
    $( timeslotId ).addClass("selected-slot");
   
    $.ajax({
        type:"POST",
        url:"<?php echo base_url(); ?>index.php/BookingsController/getMaxSlotsBookings",
        data:{"service_id":serviceId,"time_slot":time_slots,"date":date},
        dataType:"html",
        success:function(response){
          
            $('#Party_Size').html('');
            $('#Party_Size').html(response);
            $('#guest_details').html('');
           
        }
    })
})
})

</script>