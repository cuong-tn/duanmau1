<?php
function loadall_thongke(){
$sql ="select danhmuc.name as tendm,danhmuc.id as madm,count(sanpham.id) as countsp,min(sanpham.price) as minprice,max(sanpham.price) as maxprice,avg(sanpham.price) as avgprice from sanpham left join danhmuc on danhmuc.id=sanpham.iddm where 1 group by danhmuc.id order by danhmuc.id desc ";
$listtk=pdo_query($sql);
return $listtk;
}
?>