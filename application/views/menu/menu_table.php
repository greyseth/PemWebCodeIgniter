        <div class="table-container">
            <table>
                <tr class="table-header">
                    <td>Id</td><td>Name</td><td>Type</td><td>Harga</td><td>Actions</td>
                </tr>
                <?php
                    foreach($menus as $menu) {
                        echo '<tr class="table-data">';
    
                        echo '<td>'.$menu->id.'</td>';
                        echo '<td>'.$menu->name.'</td>';
                        echo '<td>'.$menu->type.'</td>';
                        echo '<td> Rp. '.number_format($menu->price).'</td>';
                        echo 
                            '<td class="row-controls">
                                <a href="'.base_url().'index.php/Menu_Edit?id='.$menu->id.'">
                                    <button><img class="svg-darkblue" src="'.base_url().'assets/img/edit.svg"/></button>
                                </a>
                                <a href="'.base_url().'index.php/Menu/deleteMenu/'.$menu->id.'">
                                    <button><img class="svg-darkred" src="'.base_url().'assets/img/delete.svg"/></button>
                                </a>
                            </td>';
    
                        echo '</tr>';
                    }
                ?>
            </table>        
        </div>