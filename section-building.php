<section id="building" data-section-anchor="<?php echo $homeURL;?>/building/">
<?php
$building=get_page_by_title('Building');

?>
<div class="top-section side-by-side scroll-magic generalFader headline-trigger" data-scrollfunction="generalFader" data-scrollvariables="theObject">
  <div class="inner">
  <div class="header-1">
  <div class="left-side fade-kid line-mover" data-count="0">
    <?php echo wpautop($building->post_content);?>
  </div>

  </div>
<div class="right-wrap">
  <div class="info right-side">
    <?php
    $stats = get_post_meta( $building->ID, 'building-stats', true );
    if(count($stats) > 0) {
      ?>
      <ul class="stat-list ">
        <?php
        foreach($stats as $s) {
          ?>
          <li class="fade-kid">  <?php tagStripper($s['text'], array('p'));?> </li>

          <?php
        }

        ?>

      </ul>
      <?php
    }


    ?>


  </div>
</div>
  </div>

</div>



  <?php
  $gal = get_post_meta( $building->ID, 'building-gallery', true );
    if(count($gal) > 0) {
      ?>
<div class="gallery">
  <?php
  $looper = 0;
  foreach($gal as $g) {
    ?>
    <div class="slide" data-count="<?php echo $looper;?>">
      <?php
      $dtSrc = wp_get_attachment_image_src($g['image'], 'fake-full', false);
      $dtSrc = $dtSrc[0];
      $mobSrc = wp_get_attachment_image_src($g['image'], 'large', false);
      $mobSrc = $mobSrc[0];

      ?>
      <img class="slide-img lazy-load hide" data-dt="<?php echo $dtSrc;?>" data-mob="<?php echo $mobSrc;?>" alt="Slide Image Number <?php echo $looper+1;?>"/>
      <?php
      if($g['caption'] != '') {
        ?>
        <div class="caption"><?php echo $g['caption'];?></div>
        <?php
      }

      ?>


    </div>

    <?php
    $looper++;
  }

  ?>

<div data-dir="next" class="button slick-next btn-class"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow487"></use></svg></div>
<div  data-dir="prev" class="button slick-prev btn-class prev"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow487"></use></svg></div>


  <ul class="dots no-style">
    <?php


    for($i=0; $i < count($gal); $i++) {
      ?>
      <li data-count="<?php echo $i;?>"></li>

      <?php
    }

    ?>

  </ul>

</div>

      <?php
    }
  ?>
<div class="bottom-section side-by-side scroll-magic generalFader headline-trigger" data-scrollfunction="generalFader" data-scrollvariables="theObject">
<div class="inner">
  <?php
  $extra= get_post_meta( $building->ID, 'building-extra-info', true );
  $extra = $extra[0];
  ?>
  <div class="left-wrap">
  <div class="white-heading left-side fade-kid line-mover" data-count="1">
    <?php echo $extra['heading'];?>

  </div>
  </div>
  <div class="extra-main">
    <div class="inner right-side">
      <div class="sub fade-kid">
        <?php echo $extra['sub-heading'];?>
      </div>
      <div class="list">
<?php echo $extra['point-list'];?>

      </div>

      <div class="btn-holder fade-kid">
        <?php
        //GET AVAIL LIST
        $avail = get_page_by_title('Availabilities');
        $dlList = get_post_meta( $avail->ID, 'downloads', true );
        foreach($dlList as $d) {
          if($d['link-copy'] == 'Building Specifications') {
            ?>
            <a class="header-styling" href="<?php echo wp_get_attachment_url( $d['document'], 'full' );?>" target="_blank"><?php echo $d['link-copy'];?></a>
            <?php
          }
        }
        ?>

      </div>

    </div>

  </div>
</div>
</div>


</section>
