<div class="last-posts">
                        <h4> احدث  اخبار الكريبتو</h4>
                        <ul>
                        <?php 
                          
                                          $rtyuq="اخبار الكريبتو";
                                          $rtyu="أخبار الكريبتو";
                                          $rtyux="اخبار الكربتو";
                                          $rtyuxx="أخبار الكربتو";
       $querysx="select * from post  where   postCategory like '$rtyuq' 
       or postCategory like '$rtyu' or postCategory = '$rtyux' 
       or postCategory like '$rtyuxx' order by postId desc";
       @$execuationsa=mysqli_query($con,$querysx) or die(mysqli_error($con));
                            if(mysqli_num_rows($execuationsa)==0){
                                echo "<b><center>لا يوجد منشورات </center></b>";
                                    }
                            $nom=0;
                           while($row=mysqli_fetch_assoc($execuationsa)){ 
                               $nom++;
                               ?>

                            <li style="overflow:hidden">
                                <a href="post.php?idPost=<?php echo $row["postId"]; ?>">
                                <span><img src="uploads/postImages/<?php echo $row["postImage"]; ?>"alt="image here"style="width:75px; height: 60px;"></span>
                                    <span style='direction:rtl !important;'><?php 
                                       if(strlen($row["postTitle"])>116){
                                        echo substr($row["postTitle"],0,115). "<br><span class='span-date'><i class='far fa-calendar-alt'style='margin-left:5px !important'></i>". $row["PostDate"]."</span>";
                                    }else{
                                        echo $row["postTitle"] . "<br><span class='span-date'><i class='far fa-calendar-alt'style='margin-left:5px !important'></i>". $row["PostDate"]."</span>";
                                    }
                                    
                                    ?></span>
                                 

                                </a>
                            </li>
                            <?php 
                            if($nom==5){
                                break;
                                                        }
                        }
                            ?>
                        </ul>
                    </div>