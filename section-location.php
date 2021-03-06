<section id="location" data-section-anchor="<?php echo $homeURL;?>/location/">
  <div class="top-copy side-by-side scroll-magic generalFader headline-trigger" data-scrollfunction="generalFader" data-scrollvariables="theObject">
    <div class="inner">
  <?php
  $location = get_page_by_title('Location');
  $content = $stats = get_post_meta( $location->ID, 'location-content', true );
  $content = $content[0];
  ?>
    <div class="left-wrap">
    <div class="heading left-side fade-kid animate-head" data-count="2">
      <?php echo $content['main-heading'];?>

    </div>
    </div>
    <div class="right-wrap">
    <div class="content right-side fade-kid">
      <?php echo $content['main-content'];?>
    </div>
    </div>
  </div>
  </div>

  <div class="map">
    <?php
    $dtSrc = wp_get_attachment_image_src($content['map-desktop'], 'fake-full', false);
    $dtSrc = $dtSrc[0];
    $mobSrc = wp_get_attachment_image_src($content['map-mobile'], 'large', false);
    $mobSrc = $mobSrc[0];
    ?>
    <!--<a class="modal-map" href="<?php echo $siteDir;?>/assets/imgs/Map-1.jpg">-->
    <img data-dt="<?php echo $dtSrc;?>" data-mob="<?php echo $mobSrc;?>" class="lazy-load" alt="Locations Map"/>
  <!--  <span class="btn-class">
      <svg>
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#multimedia-option100"></use>
      </svg>
    </span>


    </a>-->
    <div style="position:relative;" class="scroll-magic generalFader" data-scrollfunction="generalFader" data-scrollvariables="theObject" data-scrollposition="bottom bottom">
      <a class="map-nav-link header-styling fade-kid" href="#future .map-section"> View Recent Developments </a>
    </div>
    <div id="map-key" class="clearfix scroll-magic generalFader" data-scrollfunction="generalFader" data-scrollvariables="theObject" data-scrollposition="bottom bottom">
      <div class="lines">
        <hr/>
      </div>
      <div class="pois fade-kid">
        <span class="header-styling">
          <span class="icon-holder star">
          </span>
          <span class="copy">Cultural Places</span>
        </span>
        <span class="header-styling">
          <span class="icon-holder square">
          </span>
          <span class="copy">Retail</span>
        </span>

        <span class="header-styling">
          <span class="icon-holder triangle">
          </span>
          <span class="copy">Restaurants</span>
        </span>

        <span class="header-styling">
          <span class="icon-holder circle">
          </span>
          <span class="copy">Subway Lines</span>
        </span>

        <span class="header-styling">
          <span class="icon-holder heart">
          </span>
          <span class="copy">Fitness</span>
        </span>

        <span class="header-styling citi">
          <span class="icon-holder citi">
          </span>
          <span class="copy">Citibike</span>
        </span>
      </div>

      <div class="times fade-kid">
        <div class="time">
          <h3>7 Minute Subway to</h3>
          <div class="list">Wall Street</div>
          <div class="list">World Trade Center</div>
        </div>

        <div class="time">
          <h3>Time To Airports</h3>
          <div class="list">LaGuardia 15-30 Minutes</div>
          <div class="list">JFK 30-50 Minutes</div>
          <div class="list">Newark 25-55 Minutes</div>
        </div>

        <div class="time">
          <h3>20 Minute Subway to</h3>
          <div class="list">Penn Station</div>
          <div class="list">Grand Central</div>
          <div class="list">Rockefeller Center</div>
        </div>

        <div class="time big">
          <h3>&nbsp;</h3>
          <div class="list">
          <h4>15 Subway <br/>
            Lines + LIRR</h4>
          </div>
        </div>

      </div>
      <div class="transit fade-kid">
        <h3><strong>Transit Access</strong> WIthin<br/> 3 min<span class="dt-hide">ute</span> walk</h3>
        <div class="t-list">
          <div class="item" data-d="1" data-m="4">
            <div class="title">Nevins St</div>
            <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/trans-nevins.png" data-mob="<?php echo $siteDir;?>/assets/imgs/trans-nevins.png" />
          </div>

          <div class="item" data-d="2" data-m="1">
            <div class="title">Atlantic Ave –Barclays Ctr</div>
            <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/tran-atlantic.png" data-mob="<?php echo $siteDir;?>/assets/imgs/tran-atlantic.png" />
          </div>

          <div class="item" data-d="3" data-m="5">
            <div class="title">Fulton St</div>
            <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/trans-fulton.png" data-mob="<?php echo $siteDir;?>/assets/imgs/trans-fulton.png" />
          </div>

          <div class="item" data-d="4" data-m="2">
            <div class="title">Hoyt –Schermerhorn St</div>
            <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/trans-hoyt.png" data-mob="<?php echo $siteDir;?>/assets/imgs/trans-hoyt.png" />
          </div>

          <div class="item" data-d="5" data-m="6">
            <div class="title">Lafayette Av</div>
            <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/trans-layfayette.png" data-mob="<?php echo $siteDir;?>/assets/imgs/trans-layfayette.png" />
          </div>

          <div class="item" data-d="6" data-m="3">
            <div class="title">Atlantic Terminal</div>
            <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/trans-mta.png" data-mob="<?php echo $siteDir;?>/assets/imgs/trans-mta.png" />
          </div>

        </div>

      </div>

    </div>

  </div>

  <ul id="location-gallery" class="clearfix no-style">
    <?php
    $locgal = get_post_meta( $location->ID, 'location-gallery', true );
    $looper = 0;
    foreach($locgal as $lg) {
      $imgFull = wp_get_attachment_image_src($lg['image'], 'fake-full', false);
      $imgFull = $imgFull[0];
      $imgOverlay = wp_get_attachment_image_src($lg['image'], 'large', false);
      $imgOverlay = $imgOverlay[0];
      ?>
      <li>
        <a class="modal-gal" href="<?php echo $imgFull;?>" data-start="<?php echo $looper;?>" data-galtype="location" data-type="location">
          <span class="inner">
            <img class="lazy-load" data-dt="<?php echo $imgOverlay;?>" data-mob="<?php echo $imgOverlay;?>" />

          </span>
          <span class="copy">
            <?php echo $lg['title'];?>
          </span>
          <?php
          if($lg['caption'] != '') {
            ?>
            <span class="caption hide">
              <?php echo $lg['caption'];?>
            </span>
            <?php
          }

          ?>

        </a>


      </li>
      <?php
      $looper++;
    }
    ?>


  </ul>
  <div data-galtype="location"  class="galleries hide">
    <div class="gal" data-type="location">
      <?php
      $count = 0;
      foreach($locgal as $lg) {
        $imgFull = wp_get_attachment_image_src($lg['image'], 'fake-full', false);
        $imgFull = $imgFull[0];
        ?>
        <div class="slide" data-count="<?php echo $count;?>">
        <img  data-src="<?php echo $imgFull;?>" alt="<?php echo $ta;?>"/>
        <div class="caption"><?php echo $lg['title'];?></div>
      </div>
        <?php
        $count++;
      }


      ?>

    </div>
  </div>

  <?php include 'section-future.php';?>
</section>
