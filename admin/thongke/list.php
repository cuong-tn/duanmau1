
    <div class="boxcenter">
      
     
        <div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
         
           <table>
            <tr>
                <th>STT</th>
                <th>Loại Hàng</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th></th>
            </tr>
            <?php
            foreach($listtk as $tk){
                extract($tk);
                echo " <tr>
                <td>$madm</td>
                <td>$tendm</td>
                <td>$countsp</td>
                <td>$maxprice</td>
                <td>$minprice</td>
                <td>$avgprice</td>
                
                
            </tr>";
            }
            ?>
           
         
            
           </table>
           </div>
          <a href="index.php?act=bieudo">Xem biểu đồ thống kê </a> 
           </div> 
          </form>
         </div>
        </div>
      

       
    </div>
    
</body>
</html>