<?php include_once 'header.php'; ?>
<div id="content">
<?php  include_once 'left-menu.php'; ?>
<div id="text">
  
    АДМИНКА <br>  
     Добавить продукт в БД  <br>
 <?php  
     $categories_menu = categories_to_string_bd($categories_tree);
 ?> 
 <form enctype="multipart/form-data" method="post" action="addproduct.php">
 <label>Категория товара :
  <select required name="category" onchange="Selected(this)">
  <option selected disabled>Выберите категорию</option>
<?=print $categories_menu; ?>
</select>
</label>
 
<label id='Label100' style="display:none;padding-top: 10px">Типы цветов:
<select name="parent" onchange="Selected2(this)">
<option selected disabled>Выберите категорию</option>
<option value="110">Многолетние</option>
<option value="150">Однолетние</option>
</select>
</label>

 <label id='Label110' style="display:none;padding-top: 10px">Цветы многолетние:
<select name="id">
 <option selected disabled>Выберите категорию</option>
<option value="111">ПИОНЫ</option>
</select>
</label>   
  
<label id='Label150' style="display:none;padding-top: 10px">Цветы многолетние:
<select name="id">
<option selected disabled>Выберите категорию</option>
<option value="151">АСТРЫ</option>
<option value="152">РОЗЫ</option>
</select>
</label>      
 
<label id='Label200' style="display:none;padding-top: 10px">Тип овощей:
<select name="id">
<option selected disabled>Выберите категорию</option>
<option value="201">Томаты</option>
<option value="202">Огурцы</option>
<option value="203">Перцы</option>
<option value="204">Баклажаны</option>
</select>
</label>

<label id='Label300' style="display:none;padding-top: 10px">Типы Кашпо:
<select name="id">
<option selected disabled>Выберите категорию</option>
<option value="310">Кашпо подвесные</option>
<option value="320">Кашпо на стойках</option>
</select>
</label>
<br>
<br>
НАЗВАНИЕ ТОВАРА  <input  type="text" placeholder='НАЗВАНИЕ' name='title' required><span></span>
<br>
<br>
 ОПИСАНИЕ ТОВАРА  <input  type="text" placeholder='ОПИСАНИЕ' name='content' required><span></span>
<br>
<br>
 ЦЕНА ТОВАРА  <input  type="text" placeholder='ЦЕНА' name='price' required><span></span>  
<br>
<br>
Отправить этот файл: <input name="userfile" type="file" required />
<input  type="submit" value="Добавить товар" />
<input  type="reset" value="Очистить форму" />   
</form>
        

</div>
    </div>

<?php include_once 'footer.php'; ?> 
            
            
