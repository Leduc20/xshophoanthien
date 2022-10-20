<?php
function insert_account($user, $email, $password)
{
    $sql="INSERT INTO user(name,password,email) VALUES ('$user','$password','$email')";
    pdo_execute($sql);
}
function check_user($user,$pass)
{
    $sql = "SELECT * FROM `user` WHERE name='".$user."' AND password='".$pass."'";
    $check = pdo_query_one($sql);
    return $check;
}
function check_email($email)
{
    $sql = "SELECT * FROM `user` WHERE email='".$email."'";
    $check_email = pdo_query_one($sql);
    return $check_email;
}

function update_taikhoan($id_user,$user,$pass, $email,$address,$phone)
{
    
    $sql = "UPDATE user SET name='".$user."',password='".$pass."',email='".$email."',address='".$address."',phone='".$phone."' WHERE id_user=".$id_user;
    pdo_execute($sql);
}
function loadall_account()
{
    $sql = "SELECT * FROM `user` order by id_user desc";
    $listaccount = pdo_query($sql);
    return $listaccount;
}
function delete_account($id)
{
    $sql = "DELETE FROM `user` WHERE id_user=$id";
    pdo_execute($sql);
}


?>