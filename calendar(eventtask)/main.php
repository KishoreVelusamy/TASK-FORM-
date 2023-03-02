<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        *{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        h3{
            background-color: #05ffb0;
        }
    table {
  width: 90%;
  margin-left: 8%;
  border-collapse: collapse;
  border-color: red;

}
th,td:first-child {background: aqua;}
th,td:nth-child(2n+3) {background: aqua;}

/* th:odd {
  height: 70px;
  background-color: #04AA6D;
  color: white;
}*/
th{
    border: 2px solid black;
    
}
td:hover {
    background-color: yellowgreen;
}
td{
    height:50px;
    text-align: center;
}
td,th{
    cursor:pointer;
}
</style>
</head>

<body>

    <h3 class="text-center" id="alpha">Calender</h3>

    <div class="container" id="data1">
        <?php
       
        $year = date('Y');$month = date('m');
        $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        
        $months = date('F', mktime(0, 0, 0, $month, 1, $year));

        
        $startOfTheDay = date('N', mktime(0, 0, 0, $month, 1, $year));

        echo "<h4 class='text-center'>$months $year</h4>";

        echo "<table>";echo "<tr>";echo "<th>Sunday</th>";
        echo "<th>Monday</th>";echo "<th>Tuesday</th>";echo "<th>Wednesday</th>";echo "<th>Thursday</th>";echo "<th>Friday</th>";
        echo "<th>Saturday</th>";echo "</tr>";


        echo "<tr>";
        for ($i = 1; $i < $startOfTheDay; $i++) {

            
            echo "<td class='border border-secondary col-lg-1'></td>";
        }
        for ($i = 1; $i <= $numDays; $i++) {
            echo "<td class='p-4 m-4 border border-primary text-center col-md-1'><span>$i</span><div id='one$i'></div></td>";
            if (($i + $startOfTheDay - 1) % 7 == 0) {
                echo "</tr><tr>";
            }
        }
        for ($i = ($startOfTheDay + $numDays - 1) % 7; $i < 7; $i++) {
            echo "<td></td>";
        }
        echo "</tr>";

        echo "</table>";

        ?>
    </div>

</body>

</html>

<script>
    $(document).ready(function () {


        //To insert the data into database by the User

        $("td span").click(function () {

            var eventdata = prompt("Enter the events or title");

            var date = this.innerText;

            //if the event type box is empty,the empty event is wont added to the database

            if ( eventdata != "" && eventdata != null && eventdata != undefined) {
                $.ajax({
                    type: "post",
                    url: "insert.php",

                    data: { event: eventdata, date: date },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                        shown();

                    }
                });

            } else {

                event.preventDefault();
            }
        })

    shown();
    function shown() {

        //to display the added event in their date(to the date we added the event)
        $.ajax({
            type: "GET",

            url: "display.php",

            dataType: "json",

            success: function (response) {
                
                console.log(response);

                $(".event").empty();

                for (let num = 0; num < response.length; num++) {

                    $("#one" + response[num][0]).append(`<p class='bg-warning text-muted  event' id="${response[num][2]}">
                    
                    ${response[num][1]}
                    
                    </p>`);

                }
            }

        });

    }



    //to delete the particular event based on their Id

    $(document).on('click', '.event', function () {

    var del = $(this).attr('id');
    
    var ok=confirm("You need to delete this event?");
    // alert("");

    if(ok){
    
    
    $.ajax({

    type: "post",
    url: "remove.php",

    data: {
         delete: del
         },

    dataType: "text",
    success: function (response) {
        alert(response);
        shown();
    }

});
    }
    else{
        event.preventDefault();
    }

});
});


    // if (window.history.replaceState) {
    //     window.history.replaceState(null, null, window.location.href);
    // }

</script>