<div class="jumbotron">
    <h1 class="display-3"><?php echo $this->pageTitle; ?></h1>
    <p class="lead">Home Page description</p>
    <hr class="my-2">
    <p><?php echo $this->message("this is a message..."); ?></p>
    <p class="lead">
    <ul>
        <?php foreach ($emails as $email) : ?>
            <li><?php echo $email; ?></li>
        <?php endforeach; ?>
    </ul>
    </p>
</div>