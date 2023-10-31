        <div class="table-container">
            <table>
                <tr class="table-header">
                    <td>Id</td><td>Name</td><td>Username</td><td>Level</td><td>Actions</td>
                </tr>
                <?php
                    foreach($users as $user) {
                        echo '<tr class="table-data">';

                        echo '<td class="td-center">'.$user->id.'</td>';
                        echo '<td>'.$user->name.'</td>';
                        echo '<td>'.$user->username.'</td>';
                        echo '<td class="td-center">'.($user->level === '1' ? 'ADMIN' : 'USER').'</td>';
                        echo 
                        '<td class="row-controls">
                            <a href="'.base_url().'index.php/User_Edit?id='.$user->id.'">
                                <button><img class="svg-darkblue" src="'.base_url().'assets/img/edit.svg"/></button>
                            </a>
                            <a href="'.base_url().'index.php/User/deleteUser/'.$user->id.'">
                                <button><img class="svg-darkred" src="'.base_url().'assets/img/delete.svg"/></button>
                            </a>
                        </td>';

                        echo '</tr>';
                    }            
                ?>
            </table>
        </div>