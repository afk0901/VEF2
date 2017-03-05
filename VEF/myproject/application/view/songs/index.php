
<div class="container">
    
        <h1>AMAZING BOOKS!</h1>

        <form action="<?php echo URL; ?>songs/selectbook" method="POST">
            <select name = "selected">
            <?php 


            foreach ($books as $book) {?>

                    <option><?php if (isset($book->name)) { echo htmlspecialchars($book->name, ENT_QUOTES, 'UTF-8');}

                        }

                        ?>
                    </option>
           
            </select>

            <input type="submit" name = "more" value = "More info"/>
            
           </form> 

    </div>
</div>


