<?php
  include "include/connection.php";
  date_default_timezone_set("Africa/Cairo");
  session_start();
  include "include/header.php";
   ?>


 <title>ALCRYPTONZ</title>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="top-page">
    <!-- start navbar -->
    <?php include "include/anotherNavBar.php"; ?>
    <!-- end navbar -->
    <!--start Arrow to top Page -->
<a href="#top-page" style="position:fixed;right:15px;bottom:15px;font-size:32px; color:black;z-index:68544;background-color:white;padding:0 5px;border-radius:5px;" ><i class="fas fa-chevron-circle-up" style="border:1px solid white;"></i></a>
<!--End Arrow to top Page -->
        <!-- start content -->
        <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="parent-news">
                <?php
                        if(isset($_GET["nameCategory"]) && !empty($_GET["nameCategory"])){
                            $x=filter_var($_GET["nameCategory"],FILTER_SANITIZE_STRING);  
                        $qp="select * from post where postCategory='$x' order by postId desc";
                        @$execuation=mysqli_query($con,$qp);
                        if(mysqli_num_rows($execuation)==0){
                            echo "<b><center>لا يوجد منشورات   </center></b>";
                                }else{
                        while($row=mysqli_fetch_assoc($execuation)){  ?>
                               <!--POST-->
                               <a style="direction:rtl;overflow:hidden" href="post.php?idPost=<?php echo $row["postId"]; ?>"target='_blank'> <div class="small-post">
                      <div class="img-div"><img src="uploads/postImages/<?php echo $row["postImage"]; ?>" alt="image here"></div>
                        <h3 style="color:black;word-wrap: break-word;"><?php echo $row["postTitle"]; ?> </h3>
                        <span> <?php echo $row["postAuthor"]; ?> &nbsp;<i class="fas fa-user"></i></span><br>
                        <span> <?php echo $row["PostDate"]; ?>&nbsp; <i class="far fa-calendar-alt"></i></span>&nbsp;&nbsp;
                        <span>  <?php echo $row["postCategory"]; ?> &nbsp; <i class="fas fa-tags"></i> </span>
                        <p style="color:black;">
                        <?php 
                                if(strlen($row["postContent"])>150){
                                 echo strip_tags(substr(str_replace("&nbsp;"," ",$row["postContent"]),0,350)."....");
                                }else{
                                   echo strip_tags(str_replace("&nbsp;"," ",$row["postContent"]));
                                }
                                 ?>
                        </p>
               
                   </div></a>
                   <?php }  } }else{
                           echo "<div style='font-weight:bold;color:red;font-size:28px'>";
                           echo " <i class='fas fa-exclamation-triangle'></i> ";
                           echo"هناك مشكلة";
                           echo "</div>";

                       }?>
                </div>
                        </div>
                <div class="col-md-4">
                    <!-- start social  -->
                    <?php include_once "include/social.php"; ?>
                    <!-- end social  -->
                            <!-- start latest Partners posts -->
                            <?php include_once "include/lateast-Partners-Posts.php"; ?>
                    <!-- end latest Partners posts -->
                <!-- start latest posts -->
                       <?php include_once "include/lateastPosts.php"; ?>
                    <!-- end latest posts -->
                                                                        <!-- start latest alcrypto posts -->
                                                                        <?php include_once "include/newsAl.php"; ?>
                    <!-- end latest alcrypto posts -->
                     <!-- start  categoreis -->
                <?php include_once "include/catPart.php"; ?>
                 <!-- end categoreis -->
                         <!-- start contr  -->
                         <?php include_once "include/contr.php"; ?>
                    <!-- end contr  -->
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
        <!-- start footer -->
        <?php include "include/underfooter.php"; ?>
    <!-- end footer -->
    <?php include "include/footer.php"; ?>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YN940EKWRS"></script>
<script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2473974671507788"
     crossorigin="anonymous"></script>
     
     
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YN940EKWRS');
</script>