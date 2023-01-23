<!DOCTYPE html>
<html lang="en">
<?php

require "../sign/php/songConfig.php";
require "../sign/php/logninConfig.php";
// var_dump($_SESSION);
// die;
if (!isset($_SESSION['id'])) {
  header('location: index.php');
}
if (isset($_GET['delete'])) {
  $song = new songConfig();
  $song->Delete();
  header('Location: home.php');
}

$song = new songConfig();
$admin = new logninConfig();
$count_songs = $song->CountSong();
$count_artist = $song->CountArtist();
$count_admin = $admin->CountAdmin();


?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" href="styleT.css">
  <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
  <!--Regular Datatables CSS-->
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <!--Responsive Extension Datatables CSS-->
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" integrity="sha512-yxSQDoat2NPQ9U4mKdYra2YNenVsnRuGxVvyrirmrDKzwOdxKJVqkDEvQ17pL/PJ6B7n2n77Xm6d62bMjCBqCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>
  <!-- Start Header-->
  <div class="Header">
    <div class="comtainer">
      <div class="Slider">
        <div class="intro">
          <h1> <span>M</span>u<span>si</span>c<span> is </span><span>L</span>i<span>f</span>e</h1>
          <div class="LineHorizental">

          </div>
          <a href="#here"><input type="button" class="button" value="Directly To Music"></a>
        </div>
      </div>
    </div>
    <div class="Navebar">
      <div class="comtainer">
        <h2>Lyrics<span>>JD-king</span></h2>
        <ul>
          <li class="Active"><a href="#">Home</a></li>
          <li><a name="Aboutme" href="#here1">About Us</a></li>
          <li><a href="#">Album</a></li>
          <li><a href="#">Artist</a></li>
          <li><a href="#">Music</a></li>
          <li><a href="php/logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Header-->




  <!--Start Resum -->
  <div class="rusm" id="here1">
    <div class="comtainer">
      <h1>About Us</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis numquam iste, perferendis iure officiis odio consequatur quam quia illum tenetur asperiores eos aperiam explicabo, corrupti atque dicta amet! Consequuntur, minima!</p>
      <button>Know more</button>
      <div class="row">
        <div class="col-md-3">
          <div class="stati bg-emerald left">
            <i class="icon-mustache icons"></i>
            <div>
              <b><?php echo $count_songs['count'] ?></b>
              <span>Nombre total des titres</span>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="stati bg-emerald left">
            <i class="icon-playlist icons"></i>
            <div>
              <b><?php echo $count_artist['count'] ?></b>
              <span>nombre total des artistes</span>
            </div>
          </div>
        </div>



        <div class="col-md-3">
          <div class="stati bg-emerald left">
            <i class="icon-eyeglass icons"></i>
            <div>
              <b><?php echo $count_admin['count'] ?></b>
              <span>nombre total des admin</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!--End Resume-->


  <!--End Resume-->
  <!--Stat Portfolio-->
  <div class="Portfolio" id="here">
    <div class="comtainer">
      <div class="TxtPortfolio">
        <h1>Best Music Lyrics</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sapiente consequatur minima asperiores, dolorem perspiciatis voluptatem ipsum molestiae repellat amet, ab officia unde fugiat vero fugit sunt, aliquid incidunt temporibus?</p>
      </div>
      <div class="clearFx"></div>
      <!-- <div class="imgPortfolio">
                           <div><img src="http://calypsoblog.cowblog.fr/images/90-copie-1.jpg" width="300" height="333"> </div>
                           <div><img src="http://calypsoblog.cowblog.fr/images/90-copie-1.jpg" width="300" height="333"> </div>
                           <div><img src="http://calypsoblog.cowblog.fr/images/90-copie-1.jpg" width="300" height="333"> </div>
                           <div><img src="http://calypsoblog.cowblog.fr/images/90-copie-1.jpg" width="300" height="333"> </div>
                           <div><img src="http://calypsoblog.cowblog.fr/images/90-copie-1.jpg" width="300" height="333"> </div>
                           <div><img src="http://calypsoblog.cowblog.fr/images/90-copie-1.jpg" width="300" height="333"> </div>
                    
                </div> -->

      <!-- <div class="cards">

                    <div class="card">
                      <div class="card__image-holder">
                        <img class="card__image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
                      </div>
                      <div class="card-title">
                        <a href="#" class="toggle-info btn">
                          <span class="left"></span>
                          <span class="right"></span>
                        </a>
                        <h2>
                            Card title
                            <small>Image from unsplash.com</small>
                        </h2>
                      </div>
                      <div class="card-flap flap1">
                        <div class="card-description">
                          This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
                        </div>
                        <div class="card-flap flap2">
                          <div class="card-actions">
                            <a href="#" class="btn">Read more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card__image-holder">
                        <img class="card__image" src="https://source.unsplash.com/300x225/?beach" alt="beach" />
                      </div>
                      <div class="card-title">
                        <a href="#" class="toggle-info btn">
                          <span class="left"></span>
                          <span class="right"></span>
                        </a>
                        <h2>
                            Card title
                            <small>Image from unsplash.com</small>
                        </h2>
                      </div>
                      <div class="card-flap flap1">
                        <div class="card-description">
                          This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
                        </div>
                        <div class="card-flap flap2">
                          <div class="card-actions">
                            <a href="#" class="btn">Read more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card__image-holder">
                        <img class="card__image" src="https://source.unsplash.com/300x225/?mountain" alt="mountain" />
                      </div>
                      <div class="card-title">
                        <a href="#" class="toggle-info btn">
                          <span class="left"></span>
                          <span class="right"></span>
                        </a>
                        <h2>
                            Card title
                            <small>Image from unsplash.com</small>
                        </h2>
                      </div>
                      <div class="card-flap flap1">
                        <div class="card-description">
                          This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
                        </div>
                        <div class="card-flap flap2">
                          <div class="card-actions">
                            <a href="#" class="btn">Read more</a>
                          </div>
                        </div>
                      </div>
                    </div> -->



      <div class="">
        <div class="container w-full md:auto xl:w-auto  mx-auto ">




          <!--Card-->
          <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white mb-2.5">


            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
              <thead>
                <tr>
                  <th data-priority="1">Artist</th>
                  <th data-priority="2">Song Title</th>
                  <th data-priority="3">Lyrics</th>
                  <th data-priority="3">Actions</th>
                  <!-- <th data-priority="4">Age</th>
                                <th data-priority="5">Start date</th>
                                <th data-priority="6">Salary</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                $s = new songConfig();
                $songs = $s->getData();
                foreach ($songs as $song) {


                ?>
                  <tr>
                    <td><?= $song['artist'] ?></td>
                    <td><?= $song['song_title'] ?></td>
                    <td><?= $song['lyrics'] ?></td>
                    <td><a href="home.php?delete=<?= $song['id'] ?>"><button>Delete</button></a>
                      <button style="padding-left: 20px;" onclick="updateData('<?= $song['id'] . "','" . $song['artist'] .  "','" . $song['song_title'] .  "','" . $song['lyrics'] .  "'" ?>)">edit</button>
                    </td>
                  </tr>
                <?php } ?>


              </tbody>

            </table>


          </div>
          <!--/Card-->


        </div>
        <!--/container-->
      </div>



    </div>





    <button class="btn1">Add multiple</button>
  </div>

  <!--End Portfolio-->
  <!--Start footer-->
  <form action="php/songProcess.php" name="form_form" method="post">
    <div class="footer">
      <div class="comtainer xl newDiv">
        <!-- <div class="LeftContact">
                            <h2>Add Lyrics</h2>
                           
                            
                        </div> -->
        <div class="RightContact">
          <div class="act">
            <h1>Add Lyrics</h1>
            <br>
          </div>
          <br>
          <input type="hidden" name="id">
          <h6>Artist</h6>
          <input placeholder="artist" name="artist[]" type="text" required>
          <h6>Song Title</h6>
          <input placeholder="Song Title" name="song_title[]" type="text" required>
          <h6>Lyrics</h6>
          <textarea placeholder="Lyrics" name="lyrics[]" required></textarea>

          <!-- <button class="btn1">Add multiple</button> -->

        </div>
        <!-- <div class="newDiv"></div> -->
      </div>
      <button type="submit" name="song" class="btn2">Submit</button>
      <button type="submit" id="upDate" name="song-1" class="btn2 hidden">update</button>
    </div>
  </form>

  <!--End footer-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="js/js.js"></script>
  <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
</body>

</html>