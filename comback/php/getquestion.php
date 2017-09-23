<?php 
// $i=$_GET['i'];
// header("Content-type:text/html;charset=utf-8");   
$link = mysqli_connect('localhost','root','','te');
mysqli_query($link,'set names utf8');
$sql = "select answer,state,key_word,question,enabled_state from knowledge_base where id=0";
$result=$link->query($sql);
$obj=array();
 while($row = $result->fetch_assoc()) {
 		$obj['answer']=$row["answer"];
 		$obj['state']=$row["state"];
 		$obj['key_word']=$row["key_word"];
 		$obj['question']=$row["question"];
 		$obj['enabled_state']=$row["enabled_state"];

    }
    echo json_encode($obj);
 ?>