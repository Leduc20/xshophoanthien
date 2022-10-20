<?php
function insert_line($tenloai)
{
    $sql = "INSERT INTO `commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_line($id)
{
    $sql = "DELETE FROM `commodities` WHERE id_commodities=$id";
    pdo_execute($sql);
}
function loadall_line()
{
    $sql = "SELECT * FROM `commodities` order by id_commodities desc";
    $listline = pdo_query($sql);
    return $listline;
}
function loadone_line($id)
{
    $sql = "SELECT * FROM `commodities` WHERE id_commodities =$id";
    $dm = pdo_query_one($sql); 
    return $dm;
}
function update_line($id,$tenloai)
{
    $sql = "UPDATE `commodities` SET name='" . $tenloai . "' WHERE id_commodities=" . $id;
    
    pdo_execute($sql);
}
