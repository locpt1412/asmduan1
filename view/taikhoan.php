<?php

$sql_get_list_acc = "SELECT * FROM accounts WHERE position = '1' ORDER BY id_acc DESC";
// Nếu có tài khoản
if ($db->num_rows($sql_get_list_acc))
{
    echo
    '
        <br><br>
        <div class="table-responsive">
            <table class="table table-striped list" id="list_acc">
                <tr>
                    <td><input type="checkbox"></td>
                    <td><strong>ID</strong></td>
                    <td><strong>Tên đăng nhập</strong></td>
                    <td><strong>Trạng thái</strong></td>
                    <td><strong>Tools</strong></td>
                </tr>
    ';
 
    // In danh sách tài khoản
    foreach ($db->fetch_assoc($sql_get_list_acc, 0) as $key => $data_acc)
    {
        // Trạng thái tài khoản
        if ($data_acc['status'] == 0) {
            $stt_acc = '<label class="label label-success">Hoạt động</label>';
        } else if ($data_acc['status'] == 1) {
            $stt_acc = '<label class="label label-warning">Khoá</label>';
        }
 
        echo
        '
            <tr>
                <td><input type="checkbox" name="id_acc[]" value="' . $data_acc['id_acc'] .'"></td>
                <td>' . $data_acc['id_acc'] .'</td>
                <td>' . $data_acc['username'] . '</td>
                <td>' . $stt_acc . '</td>
                <td>
                    <a data-id="' . $data_acc['id_acc'] . '" class="btn btn-sm btn-warning lock-acc-list">
                        <span class="glyphicon glyphicon-lock"></span>
                    </a>
                    <a data-id="' . $data_acc['id_acc'] . '" class="btn btn-sm btn-success unlock-acc-list">
                        <span class="glyphicon glyphicon-lock"></span>
                    </a>
                    <a data-id="' . $data_acc['id_acc'] . '" class="btn btn-sm btn-danger del-acc-list">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        ';
    }
 
    echo
    '
            </table>
        </div>
    ';
}
// Nếu không có tài khoản
else
{
    echo '<br><br><div class="alert alert-info">Chưa có tài khoản nào.</div>';
}
?>