<div class="jumbotron">
    <h1 class="display-3"><?php echo $this->pageTitle; ?></h1>
    <p class="lead">Events Page description</p>
    <hr class="my-2">
    <p><?php echo $this->message("These are the events..."); ?></p>
    <p class="lead">
    <ul>
        <?php foreach ($events as $event) : ?>
            <li><b>Name : </b><?php echo $event->name; ?>  <p><b>Description : </b><?php echo $event->details; ?> <br /> <b>Author :</b> <?php echo $event->author; ?></p> </li>
        <?php endforeach; ?>
    </ul>
    </p>
</div>