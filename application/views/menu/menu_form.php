        <div class="form-container">
            <div class="add-form">
                <h2>Add menu</h2>
                <form method="post" action="<?php echo base_url(); ?>index.php/Menu/createMenu">
                    <div>
                        <label for="nameInput">Name</label>
                        <input type="text" name="nameInput" id="nameInput" required/>
                    </div>
                    
                    <div>
                        <label for="typeInput">Type</label>
                        <select name="typeInput" id="typeInput">
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>                
        
                    <div>
                        <label for="priceInput">Price</label>
                        <input type="number" name="priceInput" id="priceInput" required />
                    </div>
        
                    <input class="submit-btn" type="submit" value="Add menu" />
                </form>
            </div>
        </div>