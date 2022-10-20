<?php
function pdo_get_connection(){
    $server="localhost";
    $username="root";
    $password="";
    
    try {
        $conn=new PDO("mysql:host=$server;dbname=duanmau",$username,$password);
        //set PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Kết nối ok";
        return $conn;
    } catch (PDOException $e) {
        echo"lỗi".$e->getMessage();
    }
}
    //sql luôn là giá trị đầu tiên
    //sql,....id
    //"insert into loai(ten_loai) values(?)","Laptop";

    //Hàm thao tác dữ liệu
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    function pdo_execute_lastInsertId($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            return $conn->lastInsertId();
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    
    
    //Lấy ra tất cả dữ liệu
    function pdo_query($sql){
        $sql_args=array_slice(func_get_args(),1);
        try {
            $conn=pdo_get_connection();
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
            $row=$stmt->fetchAll();
            return $row;
        } catch (PDOException $e) {
            throw $e;

        }
        finally{
            unset($conn);
        }
    }
    //Lấy ra dữ liệu 1 bảng

    function pdo_query_one($sql){
        $sql_args=array_slice(func_get_args(),1);
        try {
            $conn=pdo_get_connection();
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            throw $e;

        }
        finally{
            unset($conn);
        }
    }

    //Lấy ra dữ liệu theo giá trị
    function pdo_query_values($sql){
        $sql_args=array_slice(func_get_args(),1);
        try {
            $conn=pdo_get_connection();
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        } catch (PDOException $e) {
            throw $e;

        }
        finally{
            unset($conn);
        }
    }
    

