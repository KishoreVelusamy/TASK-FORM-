<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="jquery-3.6.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <h2>Autocomplete searchbox</h2>
    <form autocomplete="off" method="post">
        <input type="text" name="txt" id="txt">
        <button type="submit" class="btn btn-info">Search</button>

    </form>

    <div id="box"></div>
 
    <script src="jquery.js">
        $(document).ready(function(){
            $("#txt").keyup(function(){
                var txt=$("$txt").val();
                if(txt!=""){
                    $.post("search.php",{s:txt},function(data){
                        $("#box").html(data);

                    });
                }

            });
        });
    </script>

</body>
</html>