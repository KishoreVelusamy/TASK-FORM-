<?php
class Job
{
public $Job_name;
public $Job_id;
function __construct($job_names, $job_ids)
{
$this->Job_name = $job_names;
$this->Job_id = $job_ids;
}
public function Job_details()
{
echo "<b>Job name is: </b> $this->Job_name <b>Job id is: $this->Job_id</b>";
}
}


$obj = new Job("Web Developer", "096847");
$obj->Job_details();
?>