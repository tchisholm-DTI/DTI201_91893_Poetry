<?php include "topbit.php"; ?>
        
        <main>
            <table>
                <tr>
                    <td><span class="poemtype">Limerick</span></td>
                    
                    <td>
                        <button onclick="hideContent(); swapPoem()" id="showhide">Learn more...</button>
                    </td>
                    
                </tr>
                
            </table>
            
            <div id="hidden">
                <div class="info">
                    Limericks are five line poems in the form AABBA.  They are often humorous and the name ‘Limerick’ is generally assumed to refer to the County of Limerick (in Ireland).
                    Source:<a href="https://en.wikipedia.org/wiki/Limerick_(poetry)" target="_blank"> https://en.wikipedia.org/wiki/Limerick_(poetry)</a>

                
                </div> <!-- /info box -->
            </div> <!-- /hidden -->
            
            <article>
                <h3>A Lass named Tess<br />
                    A Limerick by Anon</h3>
            <p>
                There once was a lass who liked lullabies.<br />
                She said, "See the lovely reprise!"<br />
                It was rather more,<br />
                But not very moore,<br />
                And she couldn't resist the jeopardize.<br /><br />
            </p>
            </article>
        
        </main>
        
        <aside>
            <script>
                function getVote(int) {
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                      document.getElementById("poll").innerHTML=this.responseText;
                    }
                  }
                  xmlhttp.open("GET","polls/limmerick_vote.php?vote="+int,true);
                  xmlhttp.send();
                }
            </script>
            
            <div id="poll">
                <h3>Was this poem created by a human?</h3>
                <form>
                    Yes:
                    <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                    <br>No:
                    <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                </form>
                
                <br /><br />
                <div class="centered">
                
                    <img class="allround" src="images/sm_lullaby.jpg" alt="Limerick Lullaby" width="250" height="250" />
                </div> <!-- /image centered -->
            </div> <!-- /poll -->
            
        </aside>

 <?php include "bottombit.php"; ?>       
        

