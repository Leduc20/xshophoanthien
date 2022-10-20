<?php
function insert_products($name, $filename, $price, $detail, $sale,$idlh,$view)
{
    $sql="INSERT INTO products(`name_pro`, `image`, `price`, `detail`, `sale`,`view_pro`,`id_dm`) VALUES ('$name','$filename','$price','$detail','$sale','$view','$idlh')";
    pdo_execute($sql);
}
function delete_products($id)
{
    $sql = "DELETE FROM `products` WHERE id_hh=".$id;
    pdo_execute($sql);
}
function loadall_products($key,$idlh)
{
    $sql = "SELECT * FROM `products` where 1";
    if($key!=""){
        $sql.=" and name_pro like '%".$key."%'";
    }
    if($idlh>0){
        $sql.=" and id_dm='".$idlh."'";
    }
    $sql.= " order by id_hh desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
//Load san phâm theo danh mục
function loadall_products_line($key="",$idlh=0)
{
    $sql = "SELECT * FROM `products` where 1";
    if($key!=""){
        $sql.=" and name_pro like '%".$key."%'";
    }
    if($idlh>0){
        $sql.=" and id_dm='".$idlh."'";
    }
    $sql.= " order by id_hh desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function loadall_products_top10()
{
    $sql = "SELECT * FROM `products` where 1 order by view_pro desc limit 0,5";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function loadall_products_content(){
    $sql="SELECT * FROM `products` WHERE 1 order by id_hh desc limit 0,9";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function load_name_line($id_line)
{
    if($id_line>0){
        $sql = "SELECT * FROM `commodities` WHERE id_commodities=".$id_line;
        $line = pdo_query_one($sql);
        extract($line);
        return $name;
    }else{
        return "";
    }
   
}
function loadone_products($id)
{
    $sql = "SELECT * FROM `products` WHERE id_hh =".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_products_like($id,$id_dm)
{
    $sql = "SELECT * FROM `products` WHERE id_dm=".$id_dm." and id_hh <>".$id;
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function update_products($id_hh,$name, $filename, $price, $detail, $sale, $idlh,$view)
{
    if($filename!=""){
        $sql = "UPDATE products SET name_pro='".$name."',image='".$filename."',price='".$price."',detail='".$detail."',sale='".$sale."',view_pro='".$view."',id_dm='".$idlh."' WHERE id_hh=".$id_hh;
    }
    else{
        $sql = "UPDATE products SET name_pro='".$name."',price='".$price."',detail='".$detail."',sale='".$sale."',view_pro='".$view."',id_dm='".$idlh."' WHERE id_hh=".$id_hh;
    }
    pdo_execute($sql);
}
// function update_products($id_hh,$name)
// {
   
//         $sql = "UPDATE `products` SET `name_pro`='13 pro max' WHERE id_hh=$id_hh";
    

//     pdo_execute($sql);
// }