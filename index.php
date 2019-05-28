

<?php
 include "config.php";
    // message vars
    $msg = '';
    $msgClass = '';

    //check for submit
    if(filter_has_var(INPUT_POST, 'submit')){

        // get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        //check required filds
        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
            //passed
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'plese use à valide email';
                $msgClass = 'alert-danger';
            } else {
                //passsed
                $toEmail = 'ezzytyhicham@gmail.com';
                $subject = 'Contact request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Subject</h4><p>'.$subject.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                        ';

                        //Email Headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .="Content-Type:text/html;charset=UTF-8" . " \r\n";

                        //additional header
                        $headers .= "from: " .$name. "<".$email.">". "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){
                           //email send
                            // $msg = 'email send';
                            $msgClass = 'alert-success';

                        } else {
                            $msg = 'not send';
                            $msgClass = 'alert-danger';


                        }
            }
        } else {
            //not passed
            $msg = 'plese fil all the field';
            $msgClass = 'alert-danger';
        }
        echo $msg;

    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio HICHAM EZZYTY</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Akronim|Charmonman|Dancing+Script" rel="stylesheet">
    <script src="js/typed.min.js"></script>
    <style media="screen">

    </style>
  </head>
  <body id="page-top" >

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" style="font-size: 20px;">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top" > <img src="img/14545190-designstyle-grunge-o.png" style="width:100px;"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home"><?php echo $lang['home']?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about"><?php echo $lang['about']?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work"><?php echo $lang['Project']?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact"><?php echo $lang['Contact'] ?></a>
          </li>
        </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="img/worldwide.png"> <?php echo "language" ?><span class="flag-icon flag-icon-us"> </span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="index.php?lang=fr"><span class="flag-icon flag-icon-fr">fr</span></a>
                        <a class="dropdown-item" href="index.php?lang=en"><span class="flag-icon flag-icon-en">en</span></a>

                    </div>
                </li>
            </ul>

      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
           <h1 class="intro-title mb-4"><?php echo $lang['hicham'] ?></h1>
          <h3 style="color:white !important;" class="typed"></h3>

        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route" >
    <div class="container" >
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/hicham.jpg" class="img-fluid rounded b-shadow-a" alt="" >
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s"><?php echo $lang['Name:'] ?> </span> <span>Hicham Ezzyty</span></p>
                      <p><span class="title-s"><?php echo $lang['Profile:'] ?>Profile: </span> <span> <?php echo $lang['developer'] ?></span></p>
                      <p><span class="title-s"><?php echo $lang['Email:'] ?> </span> <span>hichamziti2019@gmail.com</span></p>
                      <p><span class="title-s"><?php echo $lang['Phone:'] ?></span> <span>+212 0643389382</span></p>
                    </div>
                  </div>
                </div>

                <div class="container">

                  <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;"> bootstrap</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                  </div>
                  <br> <br>
                  <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">HTML / HTML5</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                  </div>
                  <br> <br>
                  <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;"> CSS / CSS3 </p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                  </div>
                  <br> <br><div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;"> PHP</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                  </div>
                  <br> <br>
                  <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">  MYSQL</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                  </div>
                  <br> <br>
                  <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">Javascript / jquery </p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                  </div>


                  <br>
                  <script>
                  var exec = true;

                  function move(x,y,z) {
                    var elem = document.getElementsByClassName(y)[z];
                    var num = document.getElementsByClassName("num")[z];
                    var width = 0;
                    var id = setInterval(frame, 15);
                    function frame() {
                      if (width >= x) {
                        clearInterval(id);
                      } else {
                        width++;
                        elem.style.width = width + '%';
                        num.innerText = width + "%";

                      }
                    }
                  }
                  function animate(){
                    move(90,"myBar",0);
                    move(85,"myBar",1);
                    move(60,"myBar",2);
                    move(50,"myBar",3);
                    move(45,"myBar",4);
                    move(35,"myBar",5);



                  }

                    about = document.getElementById("about");
                    about.addEventListener("mouseenter",animate);


                  </script>
            </div>

              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                    <?php echo $lang['About me'] ?>
                    </h5>
                  </div>
                  <p class="lead" style="text-align: justify; font-size:21px;">
                    <?php echo $lang['About me p'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
            <?php echo $lang['Project'] ?>
            </h3>
            <p class="subtitle-a">
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-1.png" data-lightbox="gallery-mf" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="work-img">
                <img src="img/work-1.png"  alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">challenge html-css</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="https://gitlab.com/Hichamezzyty/challenge-html-css"target="_blank">
                      <span class="ion-ios-plus-outline"><img src="img/github-big-logo.png"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-2.png" data-lightbox="gallery-mf" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="work-img">
                <img src="img/work-2.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">atelier-flexbox</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="https://gitlab.com/Hichamezzyty/atelier-flexbox/tree/master/dc/resume-download/KK/atelier-flexbox"target="_blank">
                      <span class="ion-ios-plus-outline"><img src="img/github-big-logo.png"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-3.png" data-lightbox="gallery-mf" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="work-img">
                <img src="img/work-3.png" alt="" class="img-fluid">
              </div>
              <div class="work-content" style="height: 144px;">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">sit-koora-live</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                       <a href="https://gitlab.com/Hichamezzyty/sit-koora-live" target="_blank">
                      <span  class="ion-ios-plus-outline"><img src="img/github-big-logo.png"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-4.png" data-lightbox="gallery-mf" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="work-img">
                <img src="img/work-4.png" alt="" class="img-fluid">
              </div>
              <div class="work-content" style="height: 164px;">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">clock</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="https://gitlab.com/Hichamezzyty/js-clock/tree/master/js-clock" target="_blank">
                      <span class="ion-ios-plus-outline"><img src="img/github-big-logo.png"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-5.png" data-lightbox="gallery-mf" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="work-img">
                <img src="img/work-5.png" alt="" class="img-fluid">
              </div>
              <div class="work-content" style="height: 164px;">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="https://gitlab.com/Hichamezzyty/key-calculators" target="_blank">
                      <span class="ion-ios-plus-outline"><img src="img/github-big-logo.png"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-6.png" data-lightbox="gallery-mf" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="work-img">
                <img src="img/work-6.png" alt="" class="img-fluid">
              </div>
              <div class="work-content" style="height: 164px;">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">calculators</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="https://gitlab.com/Hichamezzyty/key-calculators"target="_blank">
                      <span class="ion-ios-plus-outline"><img src="img/github-big-logo.png"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" >
      <div class="modal-body" style="padding: 0;" >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:241%; right:69%;top:0px;">
           <div class="carousel-inner">
             <div class="carousel-item active">
               <a  onclick="window.open(this.href,this.target);return false;" href="https://gitlab.com/Hichamezzyty/key-calculators" target="_blank">
               <img src="img/work-1.png" style="width: 100%;   height:100%;"></a>
             </div>
             <div class="carousel-item">
               <img src="img/work-2.png" style="width: 100%;   height:100%;">
             </div>
             <div class="carousel-item">
               <img src="img/work-3.png" style="width: 100%;   height:100%;">
             </div>
             <div class="carousel-item">
               <img src="img/work-4.png" style="width: 100%;   height:100%;">
             </div>
             <div class="carousel-item">
               <img src="img/work-5.png" style="width: 100%;   height:100%;">
             </div>
             <div class="carousel-item">
               <img src="img/work-6.png" style="width: 100%;   height:100%;">
             </div>
           </div>
             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
        </div>

        <div class="card-img-overlay">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="position: absolute;left: 166%; top: -37px; color: red;">&times;</span>
          </button>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
  <!--/ Section Portfolio End /-->



  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/76598.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      <?php echo $lang['Send Message Us'] ?>
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage"><?php echo $lang['Your'] ?></div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"  data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="<?php echo $lang['Send Message'] ?>" name="submit" class="button button-a button-big button-rouded"/>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      <?php echo $lang['Get in Touch'] ?>
                    </h5>
                  </div>
                  <div class="more-info">

                    <ul class="list-ico">
                      <li><span class="ion-ios-location"><img src="img/maps-and-flags.png"></span> QUED EDDAHAB RUE 10 NR 15 YOUSSOUFIA</li>
                      <li><span class="ion-ios-telephone"><img src="img/telephone.png"></span> +212 0643389382</li>
                      <li><span class="ion-email"><img src="img/close-envelope.png"></span> hichamziti2019@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/hicham.ziti.35" target="_blank"><span class="ico-circle" ><img src="img/facebook-letter-logo.png"></span></a></li>
                      <li><a href="https://gitlab.com/Hichamezzyty?nav_source=navbar" target="_blank"><span class="ico-circle"><img src="img/github-big-logo.png"></span></a></li>
                      <li><a href="https://twitter.com/login" target="_blank"><span class="ico-circle"><img src="img/twitter-logo.png"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <script src="js/main.js"></script>


</body>
</html>
