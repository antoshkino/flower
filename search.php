<?php include_once 'header.php'; ?>
<div id="content">
<?php  include_once 'left-menu.php'; ?>
<div id="text">
  

<?php 
$title =$_GET['q'];

$products = search_products($title);

if($products): 
 foreach($products as $product): ?>
<div id="product">
<a href="?product=<?=$product['id']?>"><?=$product['title']?></a>
<hr>
<div id="img-radius" style="background: url(<?=$product['image'] . "/" . $product['parent'] . "/" . $product['id'] . ".jpg" ?>), url(img/noimg.jpg), center no-repeat"></div>


<hr><p class="content">
<?php echo $product['content']; ?>
</p>
<hr>
<?php echo "ЦЕНА: " . $product['price'] . "&#8381;"; ?>

</div>
    <?php endforeach; 
 else: 
     echo "<p>Здесь товаров нет!</p>";  
endif; ?>
    
</div>
    </div>

<?php include_once 'footer.php'; ?> 
            
            
