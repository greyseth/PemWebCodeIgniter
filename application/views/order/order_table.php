        <div class="table-container">
            <table>
                <tr class="table-header">
                    <td>Id</td><td>Date Created</td><td>Customer</td><td>Order</td><td>Payment status</td><td>Actions</td>
                </tr>
                <tr>
                    <?php                  
                        foreach($orders as $order) {
                            $userdata = null;
                            $menudata = null;

                            foreach($users as $user) {
                                if ($user->id === $order->user_id) $userdata = $user;
                            }

                            foreach($menus as $menu) {
                                if ($menu->id === $order->menu_id) $menudata = $menu;
                            }

                            if (!$userdata || !$menudata) continue;
                            
                            echo '<tr class="table-data">';

                            echo '<td>'.$order->id.'</td>';
                            echo '<td>'.$order->order_date.'</td>';
                            echo '<td>'.$userdata->username.'</td>';
                            echo '<td>'.$menudata->name.'</td>';
                            echo '<td class="'.(($order->status === '1') ? 'green-text' : 'red-text').'">'.($order->status === '1' ? 'PAID' : 'UNPAID').'</td>';
                            echo 
                            '<td class="row-controls">
                                <a href="'.base_url().'index.php/Order_Edit?id='.$order->id.'">
                                    <button><img class="svg-darkblue" src="'.base_url().'assets/img/edit.svg"/></button>
                                </a>
                                <a href="'.base_url().'index.php/Order/deleteOrder/'.$order->id.'">
                                    <button><img class="svg-darkred" src="'.base_url().'assets/img/delete.svg"/></button>
                                </a>
                            </td>';

                            echo '</tr>';
                        }
                    ?>
                </tr>
            </table>
        </div>