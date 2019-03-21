<?php 
function validation($name, $email, $password){
  $errors = array();
  if($name == ""){
    $errors[] = "名前を入力してください";
  }elseif(mb_strlen($name) > 20){
    $errors [] = "名前は２０文字以下で入力してください";
  }

  if($email == ""){
    $errors[] = "メールアドレスを入力してください";
  }elseif(!preg_match('/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $email)){
    $errors[] = "正しいメールアドレスではありません";
  }

  if($password == ""){
    $errors[] = "パスワードを入力してください";
  }elseif(mb_strlen($password) < 6){
    $errors[] = "パスワードは６文字以上で入力してください";
  }
  
  return $errors;
}


?>

