<?php require_once 'header.php'; ?>

<div id="content">

 <?php require_once 'left-menu.php'; ?>
    
    <div id="text">
<?php include 'bread.php' ?>
      <?php 
      if(isset($_GET['category'])){
	$id = (int)$_GET['category'];

        
	// ID дочерних категорий
	$ids = cats_id($categories, $id);
	$ids = !$ids ? $id : rtrim($ids, ",");

	if($ids) $products = get_products($ids);
		else $products = null;
}     
else{
	$products = get_products();
        
}
      $id = isset($_GET['category'])?$_GET['category']:"";
      if ($id ==''){
          require_once 'glavnaya.php';
      }
    
      elseif ($id>=100 and  $id<200)
          { 
      require_once "flowers/$id.php";}
      
      elseif ($id>=200 and  $id<300)
          {
      require_once "vegetables/$id.php";}
           elseif ($id>=300 and  $id<400)
          {
      require_once "kashpo/$id.php";}
      
      elseif ($id == '903') {
      require_once "903.php";} 
      
      
      elseif ($id == '900') {
      require_once "900.php";}        
      
      elseif ($id == '901') {
      require_once "901.php";}   
      elseif ($id == '902') {
      require_once "902.php";}
      ?>
                
                
    </div>
 </div>
        
 <?php require_once 'footer.php'; ?>