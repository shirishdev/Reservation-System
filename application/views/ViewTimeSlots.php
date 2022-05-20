 <table class="table" border="0" cellspacing="0" cellspacing="0">
        <tbody>
            <?php
            $timeSlotArr=array_chunk($TimeSlot,5);
            foreach($timeSlotArr as $timeArr){
                ?>
                <tr>
                    <?php
                    foreach($timeArr as $value){
                        ?>
                        <td>
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
