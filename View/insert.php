<form metod="POST">
    <label for="title">title:</label>
    <input type="text" name="title">
    
    <br>
    
    <label for="title">cat_id:</label>
    <select>
        <option value="0">---choose one---</option>
        <?php foreach($cats as $cat): ?> 
        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['category_name'] ?></option>;
        <?php endforeach;?>  
    </select>
    
    <br>
    <label for="title">pricce:</label>
    <input type="text" name="title">
    
    <br>
    <label for="title">cover:</label>
    

<input type="file" />
    <br>
    
    <label for="title">slug:</label>
    <input type="text" name="title">
    <br>
    
    <label for="title">description:</label>
    <input type="text" name="title">
    
    <br>         
    
    <button name="btn-save" type="submit" value="Y"> Save Item </button>    
    
</form>