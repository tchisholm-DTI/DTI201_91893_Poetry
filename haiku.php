<?php include "topbit.php"; ?>
        
        <main>
            <table>
                <tr>
                    <td><span class="poemtype">Haiku</span></td>
                    
                    <td>
                        <button onclick="hideContent(); swapPoem()" id="showhide">Learn more...</button>
                    </td>
                    
                </tr>
                
            </table>
            
            <div id="hidden">
                <div class="info">
                    Haiku are a form of poetry that originated in Japan.  Traditionally a haiku consisted of three lines with a total of 17 syllables (5, 7, 5).  Whilst haiku do not rhyme, a traditional haiku should feature imagery that focuses on a specific event / point in time.
                    Source:<a href="https://www.poetryfoundation.org/learn/glossary-terms/haiku-or-hokku" target="_blank"> https://www.poetryfoundation.org/learn/glossary-terms/haiku-or-hokku</a>

                
                </div> <!-- /info box -->
            </div> <!-- /hidden -->
            
            <article>
                <h3>Guitar<br />
                    A Haiku by Anon</h3>
            <p>
               Shining summertime<br />
                A huge, spanish guitar sings<br />
                after the chocolate<br /><br />
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
                  xmlhttp.open("GET","polls/haiku_vote.php?vote="+int,true);
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
                
                    <img class="allround" src="images/sm_guitar.jpg" alt="Haiku Guitar" width="250" height="250" />
                </div> <!-- /image centered -->
            </div> <!-- /poll -->
            
        </aside>

 <?php include "bottombit.php"; ?>       
        

