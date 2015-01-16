

<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>list page</title>
</head>
<body>
<br>
<div class="container">
    <div class="col-md-12">
        <div class = "panel panel-primary">
            <div class="panel-heading ">
                <tr>
                    cinema info
                </tr>
            </div>
                        <table class="table" class="panel-body" >
                            <thead>
                            <tr>
                                <th>title</th>
                                <th>generes</th>
                                <th>stars</th>
                            </tr>
                            </thead>
                            <tbody>

    <?php
    $films=array(
    0=>array ('title'=> 'movie', 'generes'=> 'funny','stars'=>array('jonydep','bradprit','tomcruz')),
    1=>array ('title'=> 'brave', 'generes'=> 'horror', 'stars'=>array('jonydep','bradprit','tomcruz')),
    2=>array ('title'=> 'nemo', 'generes'=> 'animation','stars' => array('jonydep','bradprit','tomcruz'))
    );
    foreach($films as $bcc)
    {
    ?>
        <tr>
    <td><?php echo $bcc['title'];?></td>
            <td><?php echo $bcc ['generes'];?></td>
            <td><?php foreach ($bcc ['stars'] as $lict){?>
                    <ul>
                        <li><?php echo $lict ?></li>
                    </ul>
                <?php } ?>
            </td>
        </tr>
    <?php
    }
    ?>
                            </tbody>
}