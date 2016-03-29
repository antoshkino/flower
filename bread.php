      <div id="bread">
          
      <?php 
            if(isset($_GET['category'])){
                $id = (int)$_GET['category'];
                $breadcrumbs_array = breadcrumbs($categories, $id);
                
                if(isset($breadcrumbs_array)){
       
        if ($id == 901) {
            $breadcrumbs = "<a href='index.php'>Главная</a> / О Нас </div>";
            print $breadcrumbs;
            return $breadcrumbs;
        }
                if ($id == 900) {
            $breadcrumbs = "<a href='index.php'>Главная</a> / Контакты </div>";
            print $breadcrumbs;
            return $breadcrumbs;
        }
                }
                if ($id == 902) {
            $breadcrumbs = "<a href='index.php'>Главная</a> / Отзывы </div>";
            print $breadcrumbs;
            return $breadcrumbs;
                    }
  
    else{};
        
        $breadcrumbs = "<a href='index.php'>Главная</a> /  ";
        foreach ($breadcrumbs_array as $id => $title){
            $breadcrumbs .= "<a href='?category={$id}'>{$title}</a> / ";
        }
        $breadcrumbs =rtrim($breadcrumbs," / ");
        $breadcrumbs = preg_replace("#(.+)?<a.+>(.+)</a>$#", "$1$2", $breadcrumbs);
    }
    else{
        $breadcrumbs = "";
    }
            
    print $breadcrumbs;
   
?> 
          
    </div> 

