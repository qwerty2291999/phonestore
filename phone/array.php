<html>
   <body>
   
      <?php
        $id = 2;
        setcookie("product", "$id", time()+3600, "/", "",  0);
        array($pid=3);
        if(isset($_COOKIE["product"])){
        $id = $_COOKIE["product"];
         /* Phương thức thứ nhất để tạo mảng trong PHP. */
        $numbers = array($id);
        array_push($numbers,$pid);
         
         foreach( $numbers as $value )
         {
            echo "Giá trị phần tử mảng là $value <br />";
         }
        }
 else {
     echo'vui long chon them';
 }
      ?>
      
   </body>
</html>