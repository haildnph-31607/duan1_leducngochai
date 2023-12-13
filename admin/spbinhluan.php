<style>
    .container1{
  border: 2px solid gray;
  margin-left: 300px;
  width: 1400px;
  height: 700px;
  margin-top: 100px;
  border-radius: 5px;
    }
    .text{
        font-size: 25px;
        color: white;
        margin: 10px 0 0 30px;
    }
    th,tr{
        width: 200px;
    }
    .sanpham{
        margin-left: 100px;
        color: white;
    }
    .binhluan{
        margin-left: 100px;
        margin-top: 20px;
        color: white;
    }
</style>

<div class="container1">
<div class="text">BINH LUAN THEO SAN PHAM</div>
<div class="sanpham">
    <table>
        <thead>
            <th>ID</th>
            <th>ANH SAN PHAM</th>
            <th>TEN SAN PHAM </th>
            
        </thead>
        <tbody>
            
            <tr>
                <td><?php echo $select_bl_sp['id'] ?> </td>
                <td><img src="./<?php echo $select_bl_sp['img'] ?>" alt="" width="100px"></td>
                <td><?php echo $select_bl_sp['name'] ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="binhluan">
    <table>
        <thead>
            <th>NOIDUNG</th>
            <th>NGAYBINHLUAN</th>
            <th>TENNGUOIDUNG</th>
            <th>IDUSER</th>
     
        </thead>
        <tbody>
            <?php foreach($select_bl_bl as $bl_al):?>
            <tr>
                <td><?php echo $bl_al['noidung'] ?></td>
                <td><?php echo $bl_al['ngaybinhluan'] ?></td>
                <td><?php echo $bl_al['nameuser'] ?></td>
                <td><?php echo $bl_al['iduser'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</div>