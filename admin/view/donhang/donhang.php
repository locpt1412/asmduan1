<p>Đơn hàng</p>
<?php
$sql_donhang_dh = "SELECT * FROM tbl_cart, tbl_dangky WHERE tbl_cart.id_khachhang-tbl_dangky.id_dangky ORDER BY tbl_cart. id_cart DESC";
$query_donhang_dh = mysqli_query($mysqli, $sql_donhang_dh);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng </th>
        <th>Tên khách hàng</th>
        <th>Dia chi</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_donhang_dh)) {
    ?>
        $i++;
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['tenkhachhang'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td>
            </td>
        </tr>
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
    <?php
    }
    ?>
</table>