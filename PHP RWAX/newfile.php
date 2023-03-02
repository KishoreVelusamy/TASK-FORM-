<html>
    <head>
        <style>
            form{
                margin-left: 30%;
                padding-top: 5%;
            }
            .one{
                margin-bottom: 3%;
            }
            .two{
                margin-bottom: 3%;
            }
        </style>
    </head>
<body>


<form method="post">
<div class="one">
<label class="low">Select file:</label>
  <input type="file" class="input" name="upload" id="fileToUpload" required><br></div>
  <div class="two">
  <label for="choose">Choose:</label>
  <select id="options" name="mode">
    <option value='#'>--Select Mode--</option>
    <option value='read'>Read</option>
    <option value='write'>Write</option>
    <option value='delete'>Delete</option>
  </select>
  </div>
  <div class="three">
  <button type="submit" name="button_submit" value="Submit">Submit</button></div>
</form>


<?php


if (isset($_FILES['upload'])){
    switch($_POST['mode']){
        case 'read':
            read();
            break;

        case 'write':
                write();
                break;
        case 'delete':
            delete();
            break;

            default:
            echo "Error...!!";
    }
}

function read(){

if (isset($_FILES['upload'])){
$target_dir="referencefile/";

$target_file=$target_dir.basename($_FILES["upload"]["name"]);

            $myfile = fopen($target_file, "r") or die("Unable to open file!");
            echo fread($myfile,filesize($target_file));
            fclose($myfile);
            echo"<b style='color:green;'>File content is written.<b>";
    }
}


function write(){

    // $myfile = fopen("sample1.txt", "w") or die("Unable to open file!");

    if (isset($_POST['submit'])) {
 
        $target_file = realpath("referencefile/" . $_POST['file_name'] . ".txt");
      
        $writefun = fopen($target_file, 'w');
      
        fwrite($writefun, $_POST['write']);
      
        fclose($writefun);
      }
}

?>


</body>
</html>