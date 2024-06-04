<?php
function makeConnection(){
    $server="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($server,$username,$password,"to-do-list");
    if (!$conn){
        die("connection error".mysqli_connect_error());
    }
    return $conn;
    // else {
    //     echo "connected";


}
function add_items($value)
{
    $conVar=makeConnection();
    $sql="INSERT INTO `todolist` (`item`, `status`) VALUES ('$value', 0);";
    $conVar->query($sql);
}

function get_items(){
    $conVar=makeConnection();
    $sql="SELECT id,item FROM `todolist` where  status=0;";
    $result=$conVar->query($sql);
    
    return $result;
}
function get_items_checked(){
    $conVar=makeConnection();
    $sql="SELECT id,item FROM `todolist` where  status=1;";
    $result=$conVar->query($sql);
    
    return $result;
}


function update_items_checked($id){
    $conVar=makeConnection();
    $sql="update todolist set status= 1 where id='$id';";
    $result=$conVar->query($sql);
    return $result;
        
}
function delete_item($id){
    $conVar=makeConnection();
    $sql="delete from todolist where id ='$id';";
    $result=$conVar->query($sql);
    return $result;


}