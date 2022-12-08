<?php

function themsp($iddm, $tensp, $gia, $img){
  $conn=connectdb();
  $sql = "INSERT INTO tbl_sanpham (iddm,tensp,gia,img)
  VALUES ('$iddm', '$tensp','$gia','$img')";
  // use exec() because no results are returned
  $conn->exec($sql);

}
function insert_sanpham($iddm, $tensp, $gia, $img){
  $conn=connectdb();
  $sql = "INSERT INTO tbl_sanpham (iddm,tensp,gia,img)
  VALUES ('$iddm', '$tensp','$gia','$img')";
  // use exec() because no results are returned
  $conn->exec($sql);

}
function getonesp($id){
   $conn=connectdb();
   $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
   $stmt ->execute();
   $result = $stmt ->setFetchMode(PDO:: FETCH_ASSOC);
   $kq=$stmt->fetchAll();
   return $kq;
}





  



function getall_sp($iddm=0,$kyw=""){
  $conn=connectdb();
  $sql="SELECT * FROM tbl_sanpham WHERE 1";
  if($iddm>0) $sql.=" AND iddm=".$iddm;
  if($kyw!="") $sql.=" AND tensp like  '%".$kyw."%'";
  $sql.=" order by id DESC"; 
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}





?>

