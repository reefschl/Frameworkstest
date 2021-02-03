<head>
<?php
  $page_name = "Filter";
?>
<title><?php echo $page_name; ?></title>
<title>Advanced Product Filter Using Bootstrap 4</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
    require 'config.php';

?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <h5>Filter Articles</h5>
            <hr>
            <h6 class="text-info">Select title</h6>
            <ul class="list-group">
            <?php
                $sql="SELECT DISTINCT title from articles ORDER BY title";
                $result=$conn->query($sql);
                while ($row=$result->fetch_assoc()){
             ?>
             <li class="list-group-item">
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input article_check" value="<?= $row['title']; ?>" id="title"><?= $row['title'];?>

                    </label>
                </div>
             </li>
             <?php } ?>
            </ul>

             <h6 class="text-info">Select Body</h6>
             <ul class="list-group">
             <?php
                            $sql="SELECT DISTINCT body from articles ORDER BY body";
                            $result=$conn->query($sql);
                            while ($row=$result->fetch_assoc()){
             ?>
             <li class="list-group-item">
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input article_check" value="<?= $row['body']; ?>" id="body"><?= $row['body'];?>

                    </label>
                </div>
             </li>
             <?php } ?>
             </ul>

            <h6 class="text-info">Select ID</h6>
                         <ul class="list-group">
                         <?php
                                        $sql="SELECT DISTINCT id from articles ORDER BY id";
                                        $result=$conn->query($sql);
                                        while ($row=$result->fetch_assoc()){
                         ?>
                         <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input article_check" value="<?= $row['id']; ?>" id="id"><?= $row['id'];?>

                                </label>
                            </div>
                         </li>
                         <?php } ?>
                         </ul>


            <h6 class="text-info">Select Date of creation</h6>
                                     <ul class="list-group">
                                     <?php
                                                    $sql="SELECT DISTINCT created from articles ORDER BY created";
                                                    $result=$conn->query($sql);
                                                    while ($row=$result->fetch_assoc()){
                                     ?>
                                     <li class="list-group-item">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input article_check" value="<?= $row['created']; ?>" id="created"><?= $row['created'];?>

                                            </label>
                                        </div>
                                     </li>
                                     <?php } ?>
                                     </ul>

            <h6 class="text-info">Select Modify-Date</h6>
                                     <ul class="list-group">
                                     <?php
                                                    $sql="SELECT DISTINCT modified from articles ORDER BY modified";
                                                    $result=$conn->query($sql);
                                                    while ($row=$result->fetch_assoc()){
                                     ?>
                                     <li class="list-group-item">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input article_check" value="<?= $row['modified']; ?>" id="modified"><?= $row['modified'];?>

                                            </label>
                                        </div>
                                     </li>
                                     <?php } ?>
                                     </ul>

        </div>
            <div class="col-lg-9">
                <h5 class="text-center" id="textChange">All Articles</h5>
                <hr>
                    <div class="text-center">
                    <img src="webroot/images/giphy.gif" id="giphy" width="200" style="display:none;"> //funktioniert nicht, gif Darstellung als Ladesymbol; gespeichert im webroot/images
                    </div>
                    <div class="row" id="result">
                        <?php
                        $sql="SELECT * FROM articles";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){

                        ?>
                        <div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="<?= $row['product_image']; ?>" class="card-img-top">
                                        <div class="card-img-overlay">
                                            <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1"><?= $row['title']; ?></h6>

                                        </div>
                                            <div class="card-body">
                                                <h4 class="card-title text-danger">Price: <?= number_format($row['id']);  ?>/-</h4>
                                                <p>
                                                    Date of Creation: <?= $row['created']; ?><br>
                                                    Modify-Date: <?= $row['modified']; ?><br>
                                                </p>
                                                <a href="#" class="btn btn-success button-block">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

<h1>Blog articles</h1>
<p><?= $this->Html->link('Add Article', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
<h2><?= __('Popular Articles') ?></h2>



    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php
include "webcounter.php";
$anzahl_zugriffe = besucher($page_name);
?>

</body>





