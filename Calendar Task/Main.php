<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
</head>

<body>
    <div class="container">

        <h1>Daily Calendar</h1>
	<form method="post" action="cal.php">
		<label for="numDaysInWeek">Number of days in a week:</label>
		<input type="number" name="daysInWeek" id="numDaysInWeek" min="1" max="7" required>
		<br>
		<label for="numDaysInMonth">Number of days in a month:</label>
		<input type="number" name="daysInMonth" id="numDaysInMonth" min="1" max="31" required>
		<br>
		<label for="numMonthsInYear">Number of months in a year:</label>
		<input type="number" name="monthsInYear" id="numMonthsInYear" min="1" max="12" required>
		<br>
		<input type="submit" name="submit" value="Create It">
	</form>
	<br>
    </div>
</body>

</html>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>