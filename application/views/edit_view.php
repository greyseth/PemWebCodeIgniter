        <h2>Editing <?php echo $editType ?> <?php echo $editType === 'Order' ? $selected->id : $selected->name ?></h2>
        <div class="form-container">
            <?php if ($editType === 'Menu') : ?>
                <form method="post" action="<?php echo base_url() ?>index.php/Menu_Edit/updateMenu">
                    <input type="hidden" name="menuId" value="<?php echo $editId ?>"/>

                    <div>
                        <label for="nameUpd">Update name</label>
                        <input value="<?php echo $selected->name ?>" type="text" id="nameUpd" name="nameUpd"/>
                    </div>

                    <div>
                        <label for="typeUpd">Update type</label>
                        <select id="typeUpd" name="typeUpd">
                            <option value="Makanan" <?php echo $selected->type === 'Makanan' ? 'selected' : null ?> >Makanan</option>
                            <option value="Minuman" <?php echo $selected->type === 'Minuman' ? 'selected' : null ?>>Minuman</option>
                        </select>
                    </div>

                    <div>
                        <label for="priceUpd">Update price</label>
                        <input value="<?php echo $selected->price ?>" type="number" id="priceUpd" name="priceUpd"/>
                    </div>

                    <div>
                        <input type="submit" value="UPDATE" name="confirmUpd"/>
                        <input type="submit" value="CANCEL" name="cancelUpd"/>
                    </div>
                </form>
            <?php endif ?>

            <?php if ($editType === 'User') : ?>
                <form method="post" action="<?php echo base_url() ?>index.php/User_Edit/updateUser">
                    <input type="hidden" name="userId" value="<?php echo $editId ?>"/>

                    <div>
                        <label for="nameUpd">Update name</label>
                        <input value="<?php echo $selected->name ?>" type="text" id="nameUpd" name="nameUpd"/>
                    </div>

                    <div>
                        <label for="usernameUpd">Update username</label>
                        <input value="<?php echo $selected->username ?>" type="text" id="usernameUpd" name="usernameUpd"/>
                    </div>

                    <div>
                        <label for="passwordUpd">Update password</label>
                        <input value="<?php echo $selected->password ?>" type="password" id="passwordUpd" name="passwordUpd"/>
                    </div>

                    <div>
                        <label for="levelUpd">Update level</label>
                        <select id="levelUpd" name="levelUpd">
                            <option value="1" <?php echo $selected->level === '1' ? 'selected' : null ?> >Admin</option>
                            <option value="0" <?php echo $selected->level === '0' ? 'selected' : null ?> >User</option>
                        </select>
                    </div>

                    <div>
                        <input type="submit" value="UPDATE" name="confirmUpd"/>
                        <input type="submit" value="CANCEL" name="cancelUpd"/>
                    </div>
                </form>
            <?php endif ?>

            <?php if ( $editType === 'Order') : ?>
                <form method="post" action="<?php echo base_url() ?>index.php/Order_Edit/updateOrder">
                    <input type="hidden" name="orderId" value="<?php echo $editId ?>"/>

                    <div>
                        <label for="dateUpd">Update date</label>
                        <input value="<?php echo $selected->order_date ?>" type="date" id="dateUpd" name="dateUpd"/>
                    </div>

                    <div>
                        <label for="userIdUpd">Update user id</label>
                        <input value="<?php echo $selected->user_id ?>" type="number" id="userIdUpd" name="userIdUpd"/>
                    </div>

                    <div>
                        <label for="menuIdUpd">Update menu id</label>
                        <input value="<?php echo $selected->menu_id ?>" type="number" id="menuIdUpd" name="menuIdUpd"/>
                    </div>

                    <div>
                        <label for="statusUpd">Update payment status</label>
                        <select id="statusUpd" name="statusUpd">
                            <option value="1" <?php echo $selected->status === '1' ? 'selected' : null ?> >Paid</option>
                            <option value="0" <?php echo $selected->status === '0' ? 'selected' : null ?> >Unpaid</option>
                        </select>
                    </div>

                    <div>
                        <input type="submit" value="UPDATE" name="confirmUpd"/>
                        <input type="submit" value="CANCEL" name="cancelUpd"/>
                    </div>
                </form>
            <?php endif ?>
        </div>