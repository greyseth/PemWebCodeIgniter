        <div class="form-container">
            <div class="add-form">
                <h2>Create an order</h2>
                <form method="post" action="<?php echo base_url(); ?>index.php/Order/createOrder">
                    <div>
                        <label for="userIdInput">User Id</label>
                        <input type="number" name="userIdInput" id="userIdInput" required/>
                    </div>    

                    <div>
                        <label for="menuIdInput">Menu Id</label>
                        <input type="number" name="menuIdInput" id="menuIdInput" required/>
                    </div>

                    <div>
                        <label for="statusInput">Status</label>
                        <select name="statusInput" id="statusInput">
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                        </select>
                    </div>
                    
                    <input class="submit-btn" type="submit" value="Add order" />
                </form>
            </div>
        </div>