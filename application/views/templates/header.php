<?php 
    $hostname = '/schoolstuff/index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css"/>
    <?php 
        if (isset($customStyle)) {
            echo '<link rel="stylesheet" href="'.base_url().'css/'.$customStyle.'"/>';
        }
    ?>    
</head>
<body>
    <header>
        <div>
            <h1>Restaurant of things</h1>
        </div>  
        <div>
            <a href="<?php echo $hostname ?>/User"><button name="goto" value="UserController">User</button></a>
            <a href="<?php echo $hostname ?>/Menu"><button name="goto" value="MenuController">Menu</button></a>
            <a href="<?php echo $hostname ?>/Order"><button name="goto" value="OrderController">Orders</button></a>
        </div> 
    </header>
    <?php if (isset($message)) : ?>       
        <div class="notif <?php echo (($messageType === 'error') ? 'notif-red' : ''); ?>">
            <div class="notif-header">
                <p class="notif-header-text"><b><?php echo (($messageType === 'error') ? 'Failure' : 'Success') ?></b></p>
                <p class="notif-close" onclick="document.querySelector('.notif').remove()">Close</p>
            </div>
            <div>
                <p><?php echo $message ?></p>
            </div>
        </div>
    <?php endif ?>