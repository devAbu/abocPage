<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- TODO: napravit logo i dodat ga -->
    <!-- TODO: stranica mora bit responisve -->

    <title>ABOC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body id='body'>
  <div class="wrapper">
              <header>

                    <nav style="z-index:999">

                          <div class="menu-icon">
                                <i class="fa fa-bars fa-2x"></i>
                          </div>

                          <div class="logo" >
                                <img src="images/abocFInal.png"  style="width:300px;height:200px; background-color: none !important">
                          </div>

                          <div class="menu">
                                <ul>
                                      <li><a href="#aboutUs" id="aboutLink">about us</a></li>
                                      <li><a href="#skills" id="skillsLink">our skills</a></li>
                                      <li><a href="#team" id="teamLink">our team</a></li>
                                      <li><a href="#projects" id="projectsLink">projects</a></li>
                                </ul>
                          </div>
                    </nav>

              </header>

              <script type="text/javascript">

                // Menu-toggle button

                $(document).ready(function() {
                      $(".menu-icon").on("click", function() {
                            $("nav ul").toggleClass("showing");
                      });
                });

                // Scrolling Effect

                $(window).on("scroll", function() {
                      if($(window).scrollTop()) {
                            $('nav').addClass('black');
                      }

                      else {
                            $('nav').removeClass('black');
                      }
                })


                </script>



    <section id="landing" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <img class="textIntro" src="images/jumbotron.png" alt="ABOC Computer Science and IT engineers The best offers and price!">
            <div class="socialLinks">
                <a href="https://www.instagram.com/bosniant/" target="_blank"  class="btn btn-lg btn-primary"><i class="fa fa-instagram"></i></a>
                <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
            </div>
            <div>
                <a href="#aboutUs" class="btn btn-lg enterBtn"><i class="fa fa-caret-down"></i></a>
            </div>
        </div>
    </section>

    <article id="aboutUs">
        <div class="container">
            <h2>About us: </h2>
            <!--<div>
                We are a professional team, working around the world since 2014. Our motive is that every customer is 100% satisfied with our work without adding additional costs.
                Hard working, delivery project on time and acceptable price are our advantages.
                We offer -> Creating a professional website, mobile applications (Android and iOS), data entry, software programs, and making/editing videos.
                --- 4+ years of experience
                --- Best prices with 100% satisfaction
                --- Work 6 days a week - if necessary 7 days
                --- We are available for work 24/7 every day
            </div> -->
            <div class= "col-12 AboutUsCardWrap">
            <?php
            require 'connection.php';
            $sql = "SELECT * FROM aboutus";
            $result = $dbc->query($sql);
            $count = $result->num_rows;
            if ($count > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<div>' . $row["description"] . '</div>';
              }
            }
            ?>
        </div>
    </div>
    </article>

    <!-- TODO: pokusat skontat ljepsi dizajn za content -->
<article id="skills">
        <div class="container">
            <h2 class="ledeno">Our skills:</h2>
            <div class="row">
                <div class="col-12 skillCardWrap skillWeb">
                    <h3 class="skillHead1">Web Development</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                               <h6 class="skillSubHead">Frontend</h6>
                            <?php
                            $sql = "SELECT * FROM skills where type = 'Front-end' ";
                            $result = $dbc->query($sql);
                            $count = $result->num_rows;
                            if ($count > 0) {
                              echo '


                                <ul class="kiso">
                                  <div class="row">';
                              while ($row = $result->fetch_assoc()) {
                                if ($row["ID"] == 4) {
                                  echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                } elseif ($row["ID"] == 6) {
                                  echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                } else echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" >' . $row["programs"] . '</li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';



                              }

                              echo '  <script>
                                    $("#test1").mouseover(function(){
                                      $("#abu1").html("HTML")
                                      $("#test1").css("opacity", 0.2)
                                      $("#abu1").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                    })

                                    $("#test1").mouseout(function(){
                                      $("#abu1").html("")
                                      $("#test1").css("opacity", 1)
                                      $("#abu1").css("opacity", 0)
                                    })

                                    $("#abu1").mouseover(function(){
                                      $("#abu1").html("HTML")
                                      $("#test1").css("opacity", 0.2)
                                      $("#abu1").css("cssText", "opacity : 1 !important; font-size: 23px")
                                    })

                                    $("#abu1").mouseout(function(){
                                      $("#abu1").html("")
                                      $("#test1").css("opacity", 1)
                                      $("#abu1").css("opacity", 0)
                                    })




                                    $("#test2").mouseover(function(){
                                      $("#abu2").html("CSS")
                                      $("#test2").css("opacity", 0.2)
                                      $("#abu2").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                    })

                                    $("#test2").mouseout(function(){
                                      $("#abu2").html("")
                                      $("#test2").css("opacity", 1)
                                      $("#abu2").css("opacity", 0)
                                    })

                                    $("#abu2").mouseover(function(){
                                      $("#abu2").html("CSS")
                                      $("#test2").css("opacity", 0.2)
                                      $("#abu2").css("cssText", "opacity : 1 !important; font-size: 23px")
                                    })

                                    $("#abu2").mouseout(function(){
                                      $("#abu2").html("")
                                      $("#test2").css("opacity", 1)
                                      $("#abu2").css("opacity", 0)
                                    })


                                    $("#test3").mouseover(function(){
                                      $("#abu3").html("SASS")
                                      $("#test3").css("opacity", 0.2)
                                      $("#abu3").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                    })

                                    $("#test3").mouseout(function(){
                                      $("#abu3").html("")
                                      $("#test3").css("opacity", 1)
                                      $("#abu3").css("opacity", 0)
                                    })

                                    $("#abu3").mouseover(function(){
                                      $("#abu3").html("SASS")
                                      $("#test3").css("opacity", 0.2)
                                      $("#abu3").css("cssText", "opacity : 1 !important; font-size: 23px")
                                    })

                                    $("#abu3").mouseout(function(){
                                      $("#abu3").html("")
                                      $("#test3").css("opacity", 1)
                                      $("#abu3").css("opacity", 0)
                                    })

                                    $("#test4").mouseover(function(){
                                      $("#abu4").html("Bootstrap")
                                      $("#test4").css("opacity", 0.2)
                                      $("#abu4").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                    })

                                    $("#test4").mouseout(function(){
                                      $("#abu4").html("")
                                      $("#test4").css("opacity", 1)
                                      $("#abu4").css("opacity", 0)
                                    })

                                    $("#abu4").mouseover(function(){
                                      $("#abu4").html("Bootstrap")
                                      $("#test4").css("opacity", 0.2)
                                      $("#abu4").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                    })

                                    $("#abu4").mouseout(function(){
                                      $("#abu4").html("")
                                      $("#test4").css("opacity", 1)
                                      $("#abu4").css("opacity", 0)
                                    })



                                    $("#test5").mouseover(function(){
                                      $("#abu5").html("JavaScript")
                                      $("#test5").css("opacity", 0.2)
                                      $("#abu5").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                    })

                                    $("#test5").mouseout(function(){
                                      $("#abu5").html("")
                                      $("#test5").css("opacity", 1)
                                      $("#abu5").css("opacity", 0)
                                    })

                                    $("#abu5").mouseover(function(){
                                      $("#abu5").html("JavaScript")
                                      $("#test5").css("opacity", 0.2)
                                      $("#abu5").css("cssText", "opacity : 1 !important; font-size: 23px")
                                    })

                                    $("#abu5").mouseout(function(){
                                      $("#abu5").html("")
                                      $("#test5").css("opacity", 1)
                                      $("#abu5").css("opacity", 0)
                                    })

                                    $("#test6").mouseover(function(){
                                      $("#abu6").html("jQuery")
                                      $("#test6").css("opacity", 0.2)
                                      $("#abu6").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                    })

                                    $("#test6").mouseout(function(){
                                      $("#abu6").html("")
                                      $("#test6").css("opacity", 1)
                                      $("#abu6").css("opacity", 0)
                                    })

                                    $("#abu6").mouseover(function(){
                                      $("#abu6").html("jQuery")
                                      $("#test6").css("opacity", 0.2)
                                      $("#abu6").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                    })

                                    $("#abu6").mouseout(function(){
                                      $("#abu6").html("")
                                      $("#test6").css("opacity", 1)
                                      $("#abu6").css("opacity", 0)
                                    })


                                    $("#test7").mouseover(function(){
                                      $("#abu7").html("AngularJS")
                                      $("#test7").css("opacity", 0.2)
                                      $("#abu7").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                    })

                                    $("#test7").mouseout(function(){
                                      $("#abu7").html("")
                                      $("#test7").css("opacity", 1)
                                      $("#abu7").css("opacity", 0)
                                    })

                                    $("#abu7").mouseover(function(){
                                      $("#abu7").html("AngularJS")
                                      $("#test7").css("opacity", 0.2)
                                      $("#abu7").css("cssText", "opacity : 1 !important; font-size: 23px")
                                    })

                                    $("#abu7").mouseout(function(){
                                      $("#abu7").html("")
                                      $("#test7").css("opacity", 1)
                                      $("#abu7").css("opacity", 0)
                                    })

                                    $("#test8").mouseover(function(){
                                      $("#abu8").html("WordPress")
                                      $("#test8").css("opacity", 0.2)
                                      $("#abu8").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:8px")
                                    })

                                    $("#test8").mouseout(function(){
                                      $("#abu8").html("")
                                      $("#test8").css("opacity", 1)
                                      $("#abu8").css("opacity", 0)
                                    })

                                    $("#abu8").mouseover(function(){
                                      $("#abu8").html("WordPress")
                                      $("#test8").css("opacity", 0.2)
                                      $("#abu8").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:8px")
                                    })

                                    $("#abu8").mouseout(function(){
                                      $("#abu8").html("")
                                      $("#test8").css("opacity", 1)
                                      $("#abu8").css("opacity", 0)
                                    })

                            </script>';

                              echo
                                '</div></ul>';
                            }


                            ?>
                                <!-- <h6 class="skillSubHead">Frontend</h6>
                                <ul>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>SASS</li>
                                    <li>BOOTSTRAP</li>
                                    <li>JAVASCRIPT</li>
                                    <li>JQUERY</li>
                                    <li>ANGULAR</li>
                                    <li>WORDPRESS</li>
                                </ul> -->
                            </div>


                            <div class="col-12 col-md-6">
                                <h6 class="skillSubHead7">Backend</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Back-end' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                  echo '<ul class="kiso">
                                    <div class="row">';
                                  while ($row = $result->fetch_assoc()) {

                                    if ($row["ID"] == 14) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 16) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 12) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 15) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } else echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" >' . $row["programs"] . '</li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';

                                  }
                                  echo '<script>

                                  $("#test9").mouseover(function(){
                                    $("#abu9").html("PHP")
                                    $("#test9").css("opacity", 0.2)
                                    $("#abu9").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:30px")
                                  })

                                  $("#test9").mouseout(function(){
                                    $("#abu9").html("")
                                    $("#test9").css("opacity", 1)
                                    $("#abu9").css("opacity", 0)
                                  })

                                  $("#abu9").mouseover(function(){
                                    $("#abu9").html("PHP")
                                    $("#test9").css("opacity", 0.2)
                                    $("#abu9").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:30px")
                                  })

                                  $("#abu9").mouseout(function(){
                                    $("#abu9").html("")
                                    $("#test9").css("opacity", 1)
                                    $("#abu9").css("opacity", 0)
                                  })


                                  $("#test10").mouseover(function(){
                                    $("#abu10").html("Node.js")
                                    $("#test10").css("opacity", 0.2)
                                    $("#abu10").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:30px")
                                  })

                                  $("#test10").mouseout(function(){
                                    $("#abu10").html("")
                                    $("#test10").css("opacity", 1)
                                    $("#abu10").css("opacity", 0)
                                  })

                                  $("#abu10").mouseover(function(){
                                    $("#abu10").html("Node.js")
                                    $("#test10").css("opacity", 0.2)
                                    $("#abu10").css("cssText", "opacity : 1 !important; font-size: 23px; padding-left:30px")
                                  })

                                  $("#abu10").mouseout(function(){
                                    $("#abu10").html("")
                                    $("#test10").css("opacity", 1)
                                    $("#abu10").css("opacity", 0)
                                  })


                                  $("#test11").mouseover(function(){
                                    $("#abu11").html("JavaScript")
                                    $("#test11").css("opacity", 0.2)
                                    $("#abu11").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                  })

                                  $("#test11").mouseout(function(){
                                    $("#abu11").html("")
                                    $("#test11").css("opacity", 1)
                                    $("#abu11").css("opacity", 0)
                                  })

                                  $("#abu11").mouseover(function(){
                                    $("#abu11").html("JavaScript")
                                    $("#test11").css("opacity", 0.2)
                                    $("#abu11").css("cssText", "opacity : 1 !important; font-size: 23px")
                                  })

                                  $("#abu11").mouseout(function(){
                                    $("#abu11").html("")
                                    $("#test11").css("opacity", 1)
                                    $("#abu11").css("opacity", 0)
                                  })

                                  $("#test12").mouseover(function(){
                                    $("#abu12").html("jQuery")
                                    $("#test12").css("opacity", 0.2)
                                    $("#abu12").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#test12").mouseout(function(){
                                    $("#abu12").html("")
                                    $("#test12").css("opacity", 1)
                                    $("#abu12").css("opacity", 0)
                                  })

                                  $("#abu12").mouseover(function(){
                                    $("#abu12").html("jQuery")
                                    $("#test12").css("opacity", 0.2)
                                    $("#abu12").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#abu12").mouseout(function(){
                                    $("#abu12").html("")
                                    $("#test12").css("opacity", 1)
                                    $("#abu12").css("opacity", 0)
                                  })

                                  $("#test13").mouseover(function(){
                                    $("#abu13").html("AngularJS")
                                    $("#test13").css("opacity", 0.2)
                                    $("#abu13").css("cssText", "opacity : 1 !important; font-size: 23px;")
                                  })

                                  $("#test13").mouseout(function(){
                                    $("#abu13").html("")
                                    $("#test13").css("opacity", 1)
                                    $("#abu13").css("opacity", 0)
                                  })

                                  $("#abu13").mouseover(function(){
                                    $("#abu13").html("AngularJS")
                                    $("#test13").css("opacity", 0.2)
                                    $("#abu13").css("cssText", "opacity : 1 !important; font-size: 23px")
                                  })

                                  $("#abu13").mouseout(function(){
                                    $("#abu13").html("")
                                    $("#test13").css("opacity", 1)
                                    $("#abu13").css("opacity", 0)
                                  })

                                  $("#test14").mouseover(function(){
                                    $("#abu14").html("MySQL")
                                    $("#test14").css("opacity", 0.2)
                                    $("#abu14").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#test14").mouseout(function(){
                                    $("#abu14").html("")
                                    $("#test14").css("opacity", 1)
                                    $("#abu14").css("opacity", 0)
                                  })

                                  $("#abu14").mouseover(function(){
                                    $("#abu14").html("MySQL")
                                    $("#test14").css("opacity", 0.2)
                                    $("#abu14").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#abu14").mouseout(function(){
                                    $("#abu14").html("")
                                    $("#test14").css("opacity", 1)
                                    $("#abu14").css("opacity", 0)
                                  })

                                  $("#test15").mouseover(function(){
                                    $("#abu15").html("SQL")
                                    $("#test15").css("opacity", 0.2)
                                    $("#abu15").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#test15").mouseout(function(){
                                    $("#abu15").html("")
                                    $("#test15").css("opacity", 1)
                                    $("#abu15").css("opacity", 0)
                                  })

                                  $("#abu15").mouseover(function(){
                                    $("#abu15").html("SQL")
                                    $("#test15").css("opacity", 0.2)
                                    $("#abu15").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#abu15").mouseout(function(){
                                    $("#abu15").html("")
                                    $("#test15").css("opacity", 1)
                                    $("#abu15 ").css("opacity", 0)
                                  })

                                  $("#test16").mouseover(function(){
                                    $("#abu16").html("MongoDB")
                                    $("#test16").css("opacity", 0.2)
                                    $("#abu16").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#test16").mouseout(function(){
                                    $("#abu16").html("")
                                    $("#test16").css("opacity", 1)
                                    $("#abu16").css("opacity", 0)
                                  })

                                  $("#abu16").mouseover(function(){
                                    $("#abu16").html("MongoDB")
                                    $("#test16").css("opacity", 0.2)
                                    $("#abu16").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:13px")
                                  })

                                  $("#abu16").mouseout(function(){
                                    $("#abu16").html("")
                                    $("#test16").css("opacity", 1)
                                    $("#abu16").css("opacity", 0)
                                  })






                          </script>';

                                  echo '</div></ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>PHP</li>
                                    <li>NODE.JS</li>
                                    <li>JAVASCRIPT</li>
                                    <li>JQUERY</li>
                                    <li>ANGULAR</li>
                                    <li>MYSQL</li>
                                    <li>SQL</li>
                                    <li>MongoDB</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 skillCardWrap skillMobile">
                    <h3 class="skillHead2">Mobile Application Development</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <h6 class="skillSubHead1">Android</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Android-app' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                  echo '<ul class="muhamed">';
                                  while ($row = $result->fetch_assoc()) {

                                    echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" >' . $row["programs"] . '</li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                  }

                                  echo '<script>

                                    $("#test17").mouseover(function(){
                                      $("#abu17").html("Android")
                                      $("#test17").css("opacity", 0.2)
                                      $("#abu17").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:90px")
                                    })

                                    $("#test17").mouseout(function(){
                                      $("#abu17").html("")
                                      $("#test17").css("opacity", 1)
                                      $("#abu17").css("opacity", 0)
                                    })

                                    $("#abu17").mouseover(function(){
                                      $("#abu17").html("Android")
                                      $("#test17").css("opacity", 0.2)
                                      $("#abu17").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:90px")
                                    })

                                    $("#abu17").mouseout(function(){
                                      $("#abu17").html("")
                                      $("#test17").css("opacity", 1)
                                      $("#abu17").css("opacity", 0)
                                    })


                                    $("#test18").mouseover(function(){
                                      $("#abu18").html("Java")
                                      $("#test18").css("opacity", 0.2)
                                      $("#abu18").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:90px")
                                    })

                                    $("#test18").mouseout(function(){
                                      $("#abu18").html("")
                                      $("#test18").css("opacity", 1)
                                      $("#abu18").css("opacity", 0)
                                    })

                                    $("#abu18").mouseover(function(){
                                      $("#abu18").html("Java")
                                      $("#test18").css("opacity", 0.2)
                                      $("#abu18").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:90px")
                                    })

                                    $("#abu18").mouseout(function(){
                                      $("#abu18").html("")
                                      $("#test18").css("opacity", 1)
                                      $("#abu18").css("opacity", 0)
                                    })



                            </script>';
                                  echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>Android Studio</li>
                                    <li>JAVA</li>
                                </ul> -->
                            </div>
                            <div class="col-12 col-md-4">
                                <h6 class="skillSubHead6">iOS</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'IOS' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                  echo '<ul class="muhamed">';
                                  while ($row = $result->fetch_assoc()) {
                                    if ($row["ID"] == 19) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    }

                                    echo '<script>

                                      $("#test19").mouseover(function(){
                                        $("#abu19").html("Swift")
                                        $("#test19").css("opacity", 0.2)
                                        $("#abu19").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:96px")
                                      })

                                      $("#test19").mouseout(function(){
                                        $("#abu19").html("")
                                        $("#test19").css("opacity", 1)
                                        $("#abu19").css("opacity", 0)
                                      })

                                      $("#abu19").mouseover(function(){
                                        $("#abu19").html("Swift")
                                        $("#test19").css("opacity", 0.2)
                                        $("#abu19").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:96px")
                                      })

                                      $("#abu19").mouseout(function(){
                                        $("#abu19").html("")
                                        $("#test19").css("opacity", 1)
                                        $("#abu19").css("opacity", 0)
                                      })

                                      </script>';
                                  }
                                  echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>SWIFT</li>
                                </ul> -->
                            </div>
                            <div class="col-12 col-md-4">
                                <h6 class="skillSubHead2">Hybrid Crossplatform Apps</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Hybrid Crossplatform Apps' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                  echo '<ul class="muhamed1">';
                                  while ($row = $result->fetch_assoc()) {
                                    if ($row["ID"] == 33) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 32) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 34) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } else echo '<li>' . $row["programs"] . '</li>';
                                  }

                                  echo '<script>

                                    $("#test32").mouseover(function(){
                                      $("#abu32").html("Adobe PhoneGap")
                                      $("#test32").css("opacity", 0.2)
                                      $("#abu32").css("cssText", "opacity : 1 !important; font-size:15px;text-align:center;padding-left:105px")
                                    })

                                    $("#test32").mouseout(function(){
                                      $("#abu32").html("")
                                      $("#test32").css("opacity", 1)
                                      $("#abu32").css("opacity", 0)
                                    })

                                    $("#abu32").mouseover(function(){
                                      $("#abu32").html("Adobe PhoneGap")
                                      $("#test32").css("opacity", 0.2)
                                      $("#abu32").css("cssText", "opacity : 1 !important; font-size: 15px;text-align:center;padding-left:105px")
                                    })

                                    $("#abu32").mouseout(function(){
                                      $("#abu32").html("")
                                      $("#test32").css("opacity", 1)
                                      $("#abu32").css("opacity", 0)
                                    })

                                    $("#test33").mouseover(function(){
                                      $("#abu33").html("Apache Cordova")
                                      $("#test33").css("opacity", 0.2)
                                      $("#abu33").css("cssText", "opacity : 1 !important; font-size: 18px;text-align:center;padding-left:105px")
                                    })

                                    $("#test33").mouseout(function(){
                                      $("#abu33").html("")
                                      $("#test33").css("opacity", 1)
                                      $("#abu33").css("opacity", 0)
                                    })

                                    $("#abu33").mouseover(function(){
                                      $("#abu33").html("Apache Cordova")
                                      $("#test33").css("opacity", 0.2)
                                      $("#abu33").css("cssText", "opacity : 1 !important; font-size: 18px;text-align:center;padding-left:105px")
                                    })

                                    $("#abu33").mouseout(function(){
                                      $("#abu33").html("")
                                      $("#test33").css("opacity", 1)
                                      $("#abu33").css("opacity", 0)
                                    })


                                    $("#test34").mouseover(function(){
                                      $("#abu34").html("Electron")
                                      $("#test34").css("opacity", 0.2)
                                      $("#abu34").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:103px")
                                    })

                                    $("#test34").mouseout(function(){
                                      $("#abu34").html("")
                                      $("#test34").css("opacity", 1)
                                      $("#abu34").css("opacity", 0)
                                    })

                                    $("#abu34").mouseover(function(){
                                      $("#abu34").html("Electron")
                                      $("#test34").css("opacity", 0.2)
                                      $("#abu34").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:103px")
                                    })

                                    $("#abu34").mouseout(function(){
                                      $("#abu34").html("")
                                      $("#test34").css("opacity", 1)
                                      $("#abu34").css("opacity", 0)
                                    })

                                    </script>';


                                  echo '</ul>';
                                }
                                ?>
                               <!--  <ul>
                                    <li>Adobe PhoneGap framework</li>
                                    <li>Apache Cordova framework</li>
                                    <li>Electron framework</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 skillCardWrap skillDesk">
                    <h3 class="skillHead">Software Development</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="skillSubHead"></h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Software programming' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {

                                  echo '<ul class="kiseli">
                                     <div class="row">';
                                  while ($row = $result->fetch_assoc()) {

                                    if ($row["ID"] == 20) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 21) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 22) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 31) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } else echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" >' . $row["programs"] . '</li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                  }

                                  echo '<script>

                                    $("#test20").mouseover(function(){
                                      $("#abu20").html("C")
                                      $("#test20").css("opacity", 0.2)
                                      $("#abu20").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#test20").mouseout(function(){
                                      $("#abu20").html("")
                                      $("#test20").css("opacity", 1)
                                      $("#abu20").css("opacity", 0)
                                    })

                                    $("#abu20").mouseover(function(){
                                      $("#abu20").html("C")
                                      $("#test20").css("opacity", 0.2)
                                      $("#abu20").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#abu20").mouseout(function(){
                                      $("#abu20").html("")
                                      $("#test20").css("opacity", 1)
                                      $("#abu20").css("opacity", 0)
                                    })

                                    $("#test21").mouseover(function(){
                                      $("#abu21").html("C++")
                                      $("#test21").css("opacity", 0.2)
                                      $("#abu21").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#test21").mouseout(function(){
                                      $("#abu21").html("")
                                      $("#test21").css("opacity", 1)
                                      $("#abu21").css("opacity", 0)
                                    })

                                    $("#abu21").mouseover(function(){
                                      $("#abu21").html("C++")
                                      $("#test21").css("opacity", 0.2)
                                      $("#abu21").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#abu21").mouseout(function(){
                                      $("#abu21").html("")
                                      $("#test21").css("opacity", 1)
                                      $("#abu21").css("opacity", 0)
                                    })


                                    $("#test22").mouseover(function(){
                                      $("#abu22").html("C#")
                                      $("#test22").css("opacity", 0.2)
                                      $("#abu22").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#test22").mouseout(function(){
                                      $("#abu22").html("")
                                      $("#test22").css("opacity", 1)
                                      $("#abu22").css("opacity", 0)
                                    })

                                    $("#abu22").mouseover(function(){
                                      $("#abu22").html("C#")
                                      $("#test22").css("opacity", 0.2)
                                      $("#abu22").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#abu22").mouseout(function(){
                                      $("#abu22").html("")
                                      $("#test22").css("opacity", 1)
                                      $("#abu22").css("opacity", 0)
                                    })

                                    $("#test31").mouseover(function(){
                                      $("#abu31").html("Qt")
                                      $("#test31").css("opacity", 0.2)
                                      $("#abu31").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#test31").mouseout(function(){
                                      $("#abu31").html("")
                                      $("#test31").css("opacity", 1)
                                      $("#abu31").css("opacity", 0)
                                    })

                                    $("#abu31").mouseover(function(){
                                      $("#abu31").html("Qt")
                                      $("#test31").css("opacity", 0.2)
                                      $("#abu31").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#abu31").mouseout(function(){
                                      $("#abu31").html("")
                                      $("#test31").css("opacity", 1)
                                      $("#abu31").css("opacity", 0)
                                    })

                                    $("#test23").mouseover(function(){
                                      $("#abu23").html("Python")
                                      $("#test23").css("opacity", 0.2)
                                      $("#abu23").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#test23").mouseout(function(){
                                      $("#abu23").html("")
                                      $("#test23").css("opacity", 1)
                                      $("#abu23").css("opacity", 0)
                                    })

                                    $("#abu23").mouseover(function(){
                                      $("#abu23").html("Python")
                                      $("#test23").css("opacity", 0.2)
                                      $("#abu23").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#abu23").mouseout(function(){
                                      $("#abu23").html("")
                                      $("#test23").css("opacity", 1)
                                      $("#abu23").css("opacity", 0)
                                    })


                                    $("#test24").mouseover(function(){
                                      $("#abu24").html("Java")
                                      $("#test24").css("opacity", 0.2)
                                      $("#abu24").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#test24").mouseout(function(){
                                      $("#abu24").html("")
                                      $("#test24").css("opacity", 1)
                                      $("#abu24").css("opacity", 0)
                                    })

                                    $("#abu24").mouseover(function(){
                                      $("#abu24").html("Java")
                                      $("#test24").css("opacity", 0.2)
                                      $("#abu24").css("cssText", "opacity : 1 !important; font-size: 23px;padding-left:111px")
                                    })

                                    $("#abu24").mouseout(function(){
                                      $("#abu24").html("")
                                      $("#test24").css("opacity", 1)
                                      $("#abu24").css("opacity", 0)
                                    })


                                    </script>';

                                  echo '</div></ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>C</li>
                                    <li>C++</li>
                                    <li>Qt Framework</li>
                                    <li>C#</li>
                                    <li>PYTHON</li>
                                    <li>JAVA</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 skillCardWrap skillVideo">
                    <h3 class="skillHead3">Video Editing</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="skillSubHead"></h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Video making and editing' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                  echo '<ul class="kiseli1">';
                                  while ($row = $result->fetch_assoc()) {
                                    if ($row["ID"] == 29) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 30) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } else echo '<li>' . $row["programs"] . '</li>';

                                  }

                                  echo '<script>

                                    $("#test29").mouseover(function(){
                                      $("#abu29").html("Adobe After Effects")
                                      $("#test29").css("opacity", 0.2)
                                      $("#abu29").css("cssText", "opacity : 1 !important; font-size: 16px;text-align:center;padding-left:111px")
                                    })

                                    $("#test29").mouseout(function(){
                                      $("#abu29").html("")
                                      $("#test29").css("opacity", 1)
                                      $("#abu29").css("opacity", 0)
                                    })

                                    $("#abu29").mouseover(function(){
                                      $("#abu29").html("Adobe After Effects")
                                      $("#test29").css("opacity", 0.2)
                                      $("#abu29").css("cssText", "opacity : 1 !important; font-size: 16px;text-align:center; padding-left:111px")
                                    })

                                    $("#abu29").mouseout(function(){
                                      $("#abu29").html("")
                                      $("#test29").css("opacity", 1)
                                      $("#abu29").css("opacity", 0)
                                    })

                                    $("#test30").mouseover(function(){
                                      $("#abu30").html("Adobe Premiere Pro")
                                      $("#test30").css("opacity", 0.2)
                                      $("#abu30").css("cssText", "opacity : 1 !important; font-size: 16px;text-align:center; padding-left:111px")
                                    })

                                    $("#test30").mouseout(function(){
                                      $("#abu30").html("")
                                      $("#test30").css("opacity", 1)
                                      $("#abu30").css("opacity", 0)
                                    })

                                    $("#abu30").mouseover(function(){
                                      $("#abu30").html("Adobe Premiere Pro")
                                      $("#test30").css("opacity", 0.2)
                                      $("#abu30").css("cssText", "opacity : 1 !important; font-size: 16px;text-align:center; padding-left:111px")
                                    })

                                    $("#abu30").mouseout(function(){
                                      $("#abu30").html("")
                                      $("#test30").css("opacity", 1)
                                      $("#abu30").css("opacity", 0)
                                    })

                                    </script>';

                                  echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>ADOBE AFTER EFFECT</li>
                                    <li>ADOBE PREMIERE PRO</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 skillCardWrap skillData">
                    <h3 class="skillHead4">Data Entry</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="skillSubHead"></h6>
                                 <?php
                                $sql = "SELECT * FROM skills where type = 'Data entry' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                  echo '<ul class="kiseli2">';
                                  while ($row = $result->fetch_assoc()) {
                                    if ($row["ID"] == 25) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 27) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 26) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } elseif ($row["ID"] == 28) {
                                      echo '<div class="col-4 offset-2"><li id="test' . $row["ID"] . '" ><img src="' . $row["programs"] . '" alt="Front-end" height=40 width=40 style="  -webkit-filter: grayscale(100%);  filter: grayscale(100%); height: 63px; width:63px;"></li><span id="abu' . $row["ID"] . '" class="combe"></span></div>';
                                    } else echo '<li>' . $row["programs"] . '</li>';
                                  }

                                  echo '<script>

                                    $("#test25").mouseover(function(){
                                      $("#abu25").html("Microsoft Excel")
                                      $("#test25").css("opacity", 0.2)
                                      $("#abu25").css("cssText", "opacity : 1 !important; font-size: 18px;text-align:center;padding-left:105px")
                                    })

                                    $("#test25").mouseout(function(){
                                      $("#abu25").html("")
                                      $("#test25").css("opacity", 1)
                                      $("#abu25").css("opacity", 0)
                                    })

                                    $("#abu25").mouseover(function(){
                                      $("#abu25").html("Microsoft Excel")
                                      $("#test25").css("opacity", 0.2)
                                      $("#abu25").css("cssText", "opacity : 1 !important; font-size: 18px;text-align:center; padding-left:105px")
                                    })

                                    $("#abu25").mouseout(function(){
                                      $("#abu25").html("")
                                      $("#test25").css("opacity", 1)
                                      $("#abu25").css("opacity", 0)
                                    })

                                    $("#test26").mouseover(function(){
                                      $("#abu26").html("MySQL")
                                      $("#test26").css("opacity", 0.2)
                                      $("#abu26").css("cssText", "opacity : 1 !important; font-size: 23px;text-align:center; padding-left:105px")
                                    })

                                    $("#test26").mouseout(function(){
                                      $("#abu26").html("")
                                      $("#test26").css("opacity", 1)
                                      $("#abu26").css("opacity", 0)
                                    })

                                    $("#abu26").mouseover(function(){
                                      $("#abu26").html("MySQL")
                                      $("#test26").css("opacity", 0.2)
                                      $("#abu26").css("cssText", "opacity : 1 !important; font-size: 23px;text-align:center; padding-left:105px")
                                    })

                                    $("#abu26").mouseout(function(){
                                      $("#abu26").html("")
                                      $("#test26").css("opacity", 1)
                                      $("#abu26").css("opacity", 0)
                                    })



                                    $("#test27").mouseover(function(){
                                      $("#abu27").html("SQL")
                                      $("#test27").css("opacity", 0.2)
                                      $("#abu27").css("cssText", "opacity : 1 !important; font-size: 23px;text-align:center;padding-left:105px")
                                    })

                                    $("#test27").mouseout(function(){
                                      $("#abu27").html("")
                                      $("#test27").css("opacity", 1)
                                      $("#abu27").css("opacity", 0)
                                    })

                                    $("#abu27").mouseover(function(){
                                      $("#abu27").html("SQL")
                                      $("#test27").css("opacity", 0.2)
                                      $("#abu27").css("cssText", "opacity : 1 !important; font-size: 23px;text-align:center; padding-left:105px")
                                    })

                                    $("#abu27").mouseout(function(){
                                      $("#abu27").html("")
                                      $("#test27").css("opacity", 1)
                                      $("#abu27").css("opacity", 0)
                                    })

                                    $("#test28").mouseover(function(){
                                      $("#abu28").html("MongoDB")
                                      $("#test28").css("opacity", 0.2)
                                      $("#abu28").css("cssText", "opacity : 1 !important; font-size: 23px;text-align:center; padding-left:105px")
                                    })

                                    $("#test28").mouseout(function(){
                                      $("#abu28").html("")
                                      $("#test28").css("opacity", 1)
                                      $("#abu28").css("opacity", 0)
                                    })

                                    $("#abu28").mouseover(function(){
                                      $("#abu28").html("MongoDB")
                                      $("#test28").css("opacity", 0.2)
                                      $("#abu28").css("cssText", "opacity : 1 !important; font-size: 23px;text-align:center; padding-left:105px")
                                    })

                                    $("#abu28").mouseout(function(){
                                      $("#abu28").html("")
                                      $("#test28").css("opacity", 1)
                                      $("#abu28").css("opacity", 0)
                                    })

                                    </script>';
                                  echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>EXCEL</li>
                                    <li>MYSQL</li>
                                    <li>SQL</li>
                                    <li>MongoDB</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <!-- TODO: dodat slike u bazi i povuc ih -->
    <article id="team">
        <div class="container">
        <div class="row">
            <h2>Our team</h2>
        </div>
        <div class="row">
              <?php
                //require 'connection.php';
              $sql = "SELECT * FROM team";
              $result = $dbc->query($sql);
              $count = $result->num_rows;
              if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/muha.jpg" alt="muha" width="100%">
                <h4>' . $row["name"] . '</h4>
                <div class="memberSocialLinks">
                    <a href=" ' . $row["github"] . ' " target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href=" ' . $row["linkedin"] . '" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">' . $row["position"] . '<br><a href=" ' . $row["educationLink"] . ' " target="_blank"> ' . $row["education"] . '</a></p>
            </div>';
                }
              }
              ?>
           <!-- <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/abu.png" alt="abu" width="100%">
                <h4>abu</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/oma.jpg" alt="omco" width="100%">
                <h4>omco</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/bake.jpg" alt="bake" width="100%">
                <h4>bake</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/combe.jpg" alt="combe" width="100%">
                <h4>combe</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>  -->
        </div>
        </div>
    </article>

    <article id="projects">
        <div class="container">
            <!-- TODO: dodat slike projekata-->
            <!-- TODO: "admin" da moze dodat novi projekat -->
            <div class="row">
                <h2>Projects:</h2>
            </div>

            <div class="container">
                <div class="row">

                <?php
                //require 'connection.php';
                $sql = "SELECT * FROM projects";
                $result = $dbc->query($sql);
                $count = $result->num_rows;
                if ($count > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo '<div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">' . $row["name"] . '</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">' . $row["description"] . '</h6>
                                    <img src="images/landing.jpg" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>';
                  }
                }
                ?>


                    <!--
                    <div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">Our homepage</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">Created for our promotional porpuses</h6>
                                    <img src="images/landing.jpg" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">Klix News portal</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">Created for porpuses of hate speech and comment fights among the people of Bosnia and Herzegovina</h6>
                                    <img src="https://s3.amazonaws.com/woothumbs/klix.ba.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">IUS webpage</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">place where students CAN'T accomplish anything related to their study needs</h6>
                                    <img src="https://docs.microsoft.com/en-us/aspnet/web-forms/overview/older-versions-getting-started/deploying-web-site-projects/displaying-a-custom-error-page-vb/_static/image1.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>
    </article>


    <!-- TODO: promijenit boje -->
    <footer>
        <!--Contact list + mapa / popup + linkovi + copyright-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 >Building your dreams in software...</h3>
                </div>
                <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                    <h2 class=" text-uppercase">Contact info</h2>

                    <ul class="list-group list-group-flush text-warning" style=" border:none; background-color: black">
                        <li class="list-group-item  " style="background-color: black">
                        <div class="row">
                            <span class="col-2 col-lg-4">
                                <i class="fa fa-map-marker mr-2"></i> <span class="text">Address</span>
                            </span>
                            <span id="footerAddress" class="col-9 ml-4  offset-md-1 offset-1 col-lg-7">
                                <a href="#" id="map" data-toggle="modal" data-target="#mapModal" style="text-decoration:none;" class="text-white">Grada Bakua 11, Sarajevo, B&H</a>
                            </span>
                            </div>
                        </li>
                        <li class="list-group-item" style="background-color: black">
                            <div class="row">
                                <span class="col-sm-2 col-2 col-lg-4">
                                    <i class="fa fa-envelope mr-2"></i><span class="text">E-mail:</span>
                                </span>
                                <span  id="footerEmail" class="col-sm-9 col-9 ml-md-3 col-lg-7">
                                    <a href="mailto:muhamed.hasanspahic@stu.ibu.edu.ba" style="text-decoration:none;" class="text-white">
                                        muhamed.hasanspahic@stu.ibu.edu.ba</a>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item" style="background-color: black">
                        <div class="row">
                                <span class="col-2 mt-2 col-lg-5">
                                    <i class="fa fa-share-alt mr-2"></i> <span class="text">Social media:</span>
                                </span>
                                <span class="col-10 col-lg-7">
                                    <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-facebook-square"></i></a>
                                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item" style="background-color: black"></li>
                    </ul>

                    <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.2453302725744!2d18.349382815303517!3d43.830010879115655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c990fdf0ccc5%3A0xdab20818f84ffaf7!2sGrada+Bakua%2C+Sarajevo+71000!5e0!3m2!1sen!2sba!4v1520858418062"
                                        width="750" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </footer>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/masonary.js"></script>
</body>
</html>
