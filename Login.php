<?php
//********************** دالة حساب بدايةونهاية عدد المخصص لكل بيج
function pagei($final,$page,$bit){
  $temp=array();
for($i=1;$i<=$final;$i++){
 
if(ceil($i/$bit) ==$page){

   $temp[]=$i;  
}
}
return  $temp;
}
//***********************8 حساب كم بيج مكون لهذا العدد
function num_page($count,$items){

  return ceil($count/$items);
    
}
// العدد الكلي
$count=65;
//عدد العناصر المطلوبة في بيج واحدة
$items=10;
//***********************8
//حساب عدد البيجات وطباعة الارقام
$result= num_page($count,$items);
for($i=1;$i<=$result;$i++){
    if($i==$_GET['page'])
echo "<a style='padding:15px;background-color:blue;color:white;margin:1px;' href='http://localhost/test/ptest.php?page=".$i."'>$i</a>";
else 
echo "<a style='padding:15px;background-color:black;color:white;margin:1px;' href='http://localhost/test/ptest.php?page=".$i."'>$i</a>";

}
?>
<br>
<br>

<?php
//طباعة بداية وبداية عناصر كل بيج
if(isset($_GET['page'])&&$_GET['page']<=$result){
$res=pagei($count,$_GET['page'],$items);
echo "start :".$res[0]."<br>";
echo "end :".$res[count($res)-1]."<br><br>";
}





?>