        <div class="form-container">
            <div class="add-form">
                <h2>Create an account</h2>
                <form method="post" action="<?php echo base_url(); ?>index.php/User/createUser">
                    <div>
                        <label for="nameInput">Name</label>
                        <input type="text" name="nameInput" id="nameInput" required/>
                    </div>

                    <div>
                        <label for="usernameInput">Username</label>
                        <input type="text" name="usernameInput" id="usernameInput" required/>
                    </div>

                    <div>
                        <label for="passwordInput">Password</label>
                        <input type="password" name="passwordInput" id="passwordInput" required/>
                    </div>
                    
                    <div>
                        <label for="levelInput">Privilege Level</label>
                        <select name="levelInput" id="levelInput">
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
    
                    <input class="submit-btn" type="submit" value="Add User" />
                </form>
            </div>
        </div>    