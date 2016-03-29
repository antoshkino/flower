
<div id="left-menu">

<ul class="category"> 
  
    <li><a href="index.php">Главная</a></li>
       
      <?php 
          include 'config.php';
        include 'functions.php';
$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);

print $categories_menu; 

?>  

    </ul>

 </div>

