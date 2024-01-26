


<body>
<div class="boxcenter">
        <div class="row2">
         <div class="row2 font_title">
          <h1>DANH sach tai khoan</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>Iduser</th>
                <th>Idpro</th>
                <th>Ngày bình luận</th>
                
            </tr>
            <?php 
            foreach($listbinhluan as $binhluan){
                extract($binhluan);
                $suabl="index.php?act=suabl&id=".$id;
                $xoabl="index.php?act=xoabl&id=".$id;
             echo ' <tr>
             <td><input type="checkbox" name="" id=""></td>
             <td>'.$id.'</td>
             <td>'.$iduser.'</td>
             <td>'.$idpro.'</td>
             <td>'.$ngaybinhluan.'</td>
            
             <td><a href="'.$suabl.'"><input type="button" value="Sửa"> </a>  <a href="'.$xoabl.'"><input type="button" value="Xóa"></a> </td>
         </tr>';
            }
            ?>
           
            
           </table>
           <!-- </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
          <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div> -->
          </form>
         </div>
        </div>
      

       
    </div>
<div

id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<img src="img/realme2.jpg" alt="">

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
    <?php
    $tongdm=count($listthongke);
        $i=1;
    
    foreach($listthongke as $thongke){
        extract($thongke);
        if($i==$tongdm){
            $dauphay="";
        }else{
            $dauphay=",";
        }
        echo "['".$thongke["name"]."', '".$thongke["countsp"]."']".dauphay;
    }
        
        ?>
//   ['Contry', 'Mhl'],
//   ['Italy',54.8],
//   ['France',48.6],
//   ['Spain',44.4],
//   ['USA',23.9],
//   ['Argentina',14.5]

]);

const options = {
  title:'World Wide Wine Production'
};

const chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
<img src="img/anh0.jpg" alt="">


       

    