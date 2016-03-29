<?php include_once 'header.php'; ?>
<div id="content">
<?php  include_once 'left-menu.php'; ?>
<div id="text">
  
<?php
include_once 'config.php';
global $connection;
$data = $_POST;
if(!isset ($data['parent']))
    $data['parent'] = $data['id'];
$query = "SELECT max(id) FROM flower WHERE parent IN($data[id]) ORDER BY id ";

	$res = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($res)){
		$products = $row;
        }

$id = $products['max(id)'];
if (!$id == 0)
$id++;
else {
    $id = $data['id'] . 0;
    $id++;
}
if ($data['category']==100)
    $img = "img/product/flowers";
elseif ($data['category']==200)
    $img = "img/product/vegetables";
elseif ($data['category']==300)
    $img = "img/product/kashpo";

$uploaddir = $img ."/". $data['id'];
$uploadfile = $uploaddir ."/". $id.".jpg";
if (move_uploaded_file($_FILES['userfile']["tmp_name"], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
mysql_select_db('flower');
$add = "INSERT INTO flower (id,title,parent,content,image,price) VALUES ('$id','$data[title]','$data[id]','$data[content]','$img','$data[price]')";
$result = mysqli_query($connection, $add);
   if ($result) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }

echo  "Категория товара =" . $data['parent'] . "<br>" . "Номер товара=" . $id .  "<br>" . "Каталог для картинки=" . $uploaddir . "<br>" . "Имя картинки=" .$uploadfile;

?>

    </div>
    </div>

<?php include_once 'footer.php'; ?> 
            
    