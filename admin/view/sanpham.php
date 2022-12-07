<div class="main">
   
    <h1>Quản Lý Sản Phẩm</h1>
    <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php 
        if (isset($dsdm)){
            foreach( $dsdm as $dm){
                echo '  <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
            }
        }
        
        ?>

        </select>
      
        <input type="text" name="tensp" id="">
        <input type="file" name="hinh" id="">
        <input type="text" name="gia" id="">
        <input type="submit" name="themmoi" value="Thêm Mới">



    </form>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên San Phẩm</th>
            <th>Hình</th>
            <th>Gía</th>
            <th>Hành Động</th>


        </tr>
        <?php
        //var_dump($kq);


        ?>
        <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $item){
                echo '
                <tr>
                <td>'.$i.'</td>
                <td>'.$item['tensp'].'</td>
                <td><img src="./uploads/'.$item['img'].'" width="80px"></td>
                <td>'.$item['gia'].'</td>
             
               
    
                <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=delsp&id='.$dm['id'].'">Xóa</a></td>
    
    
    
            </tr>';
            $i++;
            
        }
    }
    
    
    ?>
   
</table>
</div>