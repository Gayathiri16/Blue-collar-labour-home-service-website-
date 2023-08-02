<style>
    .dbresult, .dbresult td, .dbresult th{
        border:1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }
    .dbresult{
        width:800px;
        margin:auto;
    }
    .dbresult tr:nth-child(odd){
        background-color:#b2d0d6;
    }
    .dbresult tr:nth-child(even){
        background-color:ligntcyan;
    }

</style>
<?php


$link = mysqli_connect('localhost','root','','homeservice');

if(!$link){
    die('Connection error' . mysqli_connect_error());
}
$query = "SELECT name,email,phone,address,District,message from booking";

$result=mysqli_query($link, $query);
$numrow=mysqli_num_rows($result);
if($numrow>0){
    echo '<table class="dbresult">';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '<th>Address</th>';
    echo '<th>District</th>';
    echo '<th>Message</th>';
    echo '</tr>';
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
        echo '<td>' . $row['District'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '</tr>';
    }
}
else{
    echo 'Records not found';
}