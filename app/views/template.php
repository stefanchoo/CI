<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $headline;?></h1>
<?php $this->load->view($include);?>
</body>
</html>