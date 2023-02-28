<?php
            if (isset($_POST['submit'])) {

                $DaysInWeek = $_POST['daysInWeek'];

                $DaysInMonth = $_POST['daysInMonth'];

                $MonthsInYear = $_POST['monthsInYear'];


                $dayname = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

              
                $months = array('January','February','March','April','May','June','July','August','September','October','November','December'
                ); $startOfTheDay= 0;
                 echo '<table>';

               
                for ($monthname = 1; $monthname <= $MonthsInYear; $month++) {


                    echo "<th colspan='$DaysInWeek'>" . $months[$monthname - 1];
                    echo '<tr>';




                    for ($i = 0; $i < $DaysInWeek; $i++) {
                        echo '<th  ">' . $dayname[$i] .'</th>';
                    }
                    echo '</tr>';
                    $empty = $startOfTheDay;
                    echo '<tr>';

                    for ($i = 0; $i < $empty; $i++) 
                    
                    
                    {
                        echo '<td></td>';
                    }

                    for ($j = 1; $j <= $DaysInMonth; $j++) {



                        
                        if (($startOfTheDay + $j - 1) % $DaysInWeek == 0) {
                            echo '</tr><tr>';
                        }



                        echo '<td class="border border-secondary">' . $j . '</td>';



                    }
                    

                    for ($i = ($startOfTheDay+ $DaysInMonth) % $DaysInWeek; $i < $DaysInWeek; $i++) {
                        echo '<td></td>';}
                    echo '</tr>';



                    $startOfTheDay =(($startOfTheDay + $DaysInMonth) % $DaysInWeek);

                    echo "<tr>

                    <td> </td>
                    
                    </tr>";

                }

                echo '</table>';
            }
            ?>