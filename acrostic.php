<?php include "topbit.php"; ?>
        
        <main>
            <table>
                <tr>
                    <td><span class="poemtype">Acrostic</span></td>
                    
                    <td>
                        <button onclick="hideContent(); swapPoem()" id="showhide">Learn more...</button>
                    </td>
                    
                </tr>
                
            </table>
            
            <div id="hidden">
                <div class="info">
                    An acrostic poem is one where the first letter of each line spells out a word or a phrase.  These poems don’t have to rhyme.  
                    Source: 
                    <a href="https://wonderopolis.org/wonder/what-is-an-acrostic-poem" target="_blank"> https://wonderopolis.org/wonder/what-is-an-acrostic-poem</a>

                
                </div> <!-- /info box -->
            </div> <!-- /hidden -->
            
            <article>
                <h3>Worship<br />
                    An Acrostic by Anon</h3>
            <p>
                <b>W</b>ooden tabernacles hope.<br /><br />
                <b>O</b>rchestral violins pastor.<br /><br />
                <b>R</b>eed whistles idolize.<br /><br />
                <b>S</b>pecial thanks appreciate.<br /><br />
                <b>H</b>eartfelt thanks result.<br /><br />
                <b>I</b>ncoming requests prompt.<br /><br />
                <b>P</b>etitionary prayers pray.<br /><br />
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
                  xmlhttp.open("GET","polls/acrostic_vote.php?vote="+int,true);
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
                
                    <img class="allround" src="images/sm_violin.jpg" alt="Acrostic Violin" width="250" height="250" />
                </div> <!-- /image centered -->
            </div> <!-- /poll -->
            
        </aside>

 <?php include "bottombit.php"; ?>       
        

