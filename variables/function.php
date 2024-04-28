

<?php 
  function Navigation($lists){
    foreach($lists as $list){
      echo '<li class="'. $list["Class"] .'">
            <a class="nav-link" href="'. $list["link"] .'">'. $list["title"] .'</a>
             </li>';
    }
  }

  function Doctor($Doctors){
    for($i = 0; $i < sizeof($Doctors); $i++){
      echo '<div class="item">
      <div class="box">
        <div class="img-box">
          <img src="'. $Doctors[$i]["img"] .'" alt="' . $Doctors[$i]["alt"] . '" />
        </div>
        <div class="detail-box">
          <h5>
          '. $Doctors[$i]["name"] .'
          </h5>
          <h6>
          '. $Doctors[$i]["proffesion"] .'
          </h6>
          <div class="social_box">';

          foreach($Doctors[$i]["socials"] as $social) {
            echo'
            <a href="' . $social["link"] . '">
              <i class="' . $social["icon"] . '" aria-hidden="true"></i>
            </a>
            ';
          }
          
      echo'</div>
            </div>
           </div>
          </div>';
  }
}

function Treatment ($Cards){
  foreach ($Cards as $Card){
    echo '
    <div class="col-md-6 col-lg-3">
    <div class="box ">
      <div class="img-box">
        <img src="'. $Card["img"] .'" alt="">
      </div>
      <div class="detail-box">
        <h4>
        '. $Card["title"] .'
        </h4>
        <p>
        '. $Card["paragraph"] .'
        </p>
        <a href="">
        '. $Card["link"] .'
        </a>
      </div>
    </div>
  </div>
    ';
  }

}

function Hospital ($Hospitals){
foreach ($Hospitals as $Hospital){
  echo '  <div class="row">
  <div class="col-md-6 ">
    <div class="img-box">
      <img src="'. $Hospital["img"] .'" alt="">
    </div>
  </div>
  <div class="col-md-6">
    <div class="detail-box">
      <div class="heading_container">
        <h2>
        '. $Hospital["title"] .'
        </h2>
      </div>
      <p>
        '. $Hospital["paragraph"] .'
      </p>
      <a href="">
        '. $Hospital["link"] .'
      </a>
    </div>
  </div>
</div>
  
  ';
}
}

function testimonial ($Kards){
  foreach ($Kards as $Kard){
    echo ' <div class="'. $Kard["class"] .'">
    <div class="box">
      <div class="client_info">
        <div class="client_name">
          <h5>
          '. $Kard["name"] .'
          </h5>
          <h6>
          '. $Kard["text"] .'
          </h6>
        </div>
        <i class="fa fa-quote-left" aria-hidden="true"></i>
      </div>
      <p>
      '. $Kard["paragraph"] .'
      </p>
    </div>
  </div>
    ';
  }
}

function Karusel ($Karusels){
  foreach ($Karusels as $Karusel){
    echo ' 
    <div class="'. $Karusel["class"] .'">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="play_btn">
              <button>
                <i class="'. $Karusel["button"] .'"></i>
              </button>
            </div>
            <h1>
            '. $Karusel["title"] .'
            </h1>
            <p>
            '. $Karusel["paragraph"] .'
            </p>
            <a href="">
            '. $Karusel["link"] .'
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="'. $Karusel["img"] .'" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
    ';
  }
}

function InfoContact($InfoContacts){
  foreach ($InfoContacts as $InfoContact){
    echo ' <div class="info_contact">
    <a href="">
      <i class='. $InfoContact["marker"].'></i>
      '. $InfoContact["location"].'
    </a>
    <a href="">
      <i class='. $InfoContact["phone"].'></i>
      '. $InfoContact["call"].'
    </a>
    <a href="">
      <i class='. $InfoContact["email"].'></i>
      '. $InfoContact["mail"].'
    </a>
  </div>
  <div class="social_box">
    <a href="">
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="">
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </a>
    <a href="">
      <i class="fa fa-linkedin" aria-hidden="true"></i>
    </a>
    <a href="">
      <i class="fa fa-instagram" aria-hidden="true"></i>
    </a>
  </div>

    ';
  }
}

function PostBox1($PostBoxes){
  foreach ($PostBoxes as $PostBox){
    echo ' <div class="post_box">
    <div class="img-box">
      <img src="'. $PostBox["img"] .'" alt="">
    </div>
    <p>
    '. $PostBox["text"] .'
    </p>
  </div>
    
    ';
  }
}

function PostBoxi($PostBoxebi){
  foreach ($PostBoxebi as $PostBoxi){
    echo ' <div class="post_box">
    <div class="img-box">
      <img src="'. $PostBoxi["img"] .'" alt="">
    </div>
    <p>
    '. $PostBoxi["text"] .'
    </p>
  </div>
    ';
  }
}



// $i = 0;
// function Hospital($Hospitals){
// while($i < sizeof($Hospitals)) {
  

//   $i++;
// }
// }


// $i = 0;

// do {
//   echo '
//   ';
//   $i++;
// } while ($i < sizeof($Doctors)) 

// ?>          




