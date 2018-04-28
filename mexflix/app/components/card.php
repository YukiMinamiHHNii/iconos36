<div class="card large">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="<?php echo $data['poster']; ?>">
  </div>
  <div class="card-content">
    <span class="card-title activator grey-text text-darken-4"><?php echo $data['title']; ?><i class="material-icons right">more_vert</i></span>
    <p>
      <?php
        if ($data['category'] === 'Movie')  {
          echo '<i class="material-icons left">movie</i>';
        } else {
          echo '<i class="material-icons left">live_tv</i>';
        }
        echo $data['genres'];
      ?>
    </p>
  </div>
  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php echo $data['title'];?></span>
    <img src="<?php echo $data['poster_bg'];?>" alt="" class="responsive-img">
    <i class="material-icons left">stars</i>
    <?php echo $data['rating'];?>
    <small class="right">(<?php echo $data['premiere'];?>)</small>
    <p class="flow-text"><?php echo $data['plot'];?></p>
    <p class="right-align">
        <a href="<?php echo 'https://www.imdb.com/title/' . $data['imdb_id'];?>" target="_blank">
          <i class="material-icons right">link</i>
          Más info
        </a>
    </p>
    <div class="video-container">
        <?php //echo $data['trailer'];?>
    </div>
  </div>
</div>
