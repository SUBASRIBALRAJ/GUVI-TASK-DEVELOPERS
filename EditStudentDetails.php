<?php

  $con=mysqli_connect("localhost","root","","logindb");
  
  $action=$_POST["action"];
  if($action=="Insert"){
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $age=mysqli_real_escape_string($con,$_POST["age"]);
    $mobileno=mysqli_real_escape_string($con,$_POST["mobileno"]);
    $gender=mysqli_real_escape_string($con,$_POST["gender"]);
    $department=mysqli_real_escape_string($con,$_POST["department"]);
    $sql="insert into studentdetails (NAME,AGE,MOBILENO,GENDER,DEPARTMENT) values ('{$name}','{$age}','{$mobileno}','{$gender}','{$department}') ";
    if($con->query($sql)){
      $id=$con->insert_id;
      echo "
        <tr uid='{$id}'>
          <td>{$name}</td>
          <td>{$age}</td>
          <td>{$mobileno}</td>
          <td>{$gender}</td>
          <td>{$department}</td>
          <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
          <td><a href='#' class='btn btn-danger delete'>Delete</a></td>
        </tr>";
    }else{
      echo false;
    }
  }else if($action=="Update"){
    $id=mysqli_real_escape_string($con,$_POST["id"]);
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $age=mysqli_real_escape_string($con,$_POST["age"]);
    $mobileno=mysqli_real_escape_string($con,$_POST["mobileno"]);
    $gender=mysqli_real_escape_string($con,$_POST["gender"]);
    $department=mysqli_real_escape_string($con,$_POST["department"]);
    $sql="update studentdetails SET NAME='{$name}',AGE='{$age}',MOBILENO='{$mobileno}',GENDER='{$gender}',DEPARTMENT='{$department}' where ID='{$id}'";
    if($con->query($sql)){
      echo "
        <td>{$name}</td>
        <td>{$age}</td>
        <td>{$mobileno}</td>
        <td>{$gender}</td>
        <td>{$department}</td>
        <td><a href='#' class='btn btn-primary edit'>Edit</a></td>
        <td><a href='#' class='btn btn-danger delete'>Delete</a></td>";
        
    }else{
      echo false;
    }
  }else if($action=="Delete"){
    $id=$_POST["uid"];
    $sql="delete from studentdetails where ID='{$id}'";
    if($con->query($sql)){
      echo true;
    }else{
      echo false;
    }
  }
?>
