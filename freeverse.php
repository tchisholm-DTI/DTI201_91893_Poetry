<?php include "topbit.php"; ?>
        
        <main>
            <table>
                <tr>
                    <td><span class="poemtype">Free Verse</span></td>
                    
                    <td>
                        <button onclick="hideContent(); swapPoem()" id="showhide">Learn more...</button>
                    </td>
                    
                </tr>
                
            </table>
            
            <div id="hidden">
                <div class="info">
                    According to the Wikipedia, <a href=" https://en.wikipedia.org/wiki/Free_verse" target="_blank"> free verse</a> is where a poem does not have to rhyme or have a specific structure / beat.  In free verse it is still common to use various poetic techniques such as alliteration, onomatopoeia and repetition.
                    Source:<a href="https://en.wikipedia.org/wiki/Free_verse" target="_blank"> https://en.wikipedia.org/wiki/Free_verse</a>

                
                </div> <!-- /info box -->
            </div> <!-- /hidden -->
            
            <article>
                <h3>Music<br />
                    Free verse by Anon</h3>
            <p>
                Because I could not premiere for Music,
                it did kindly premiere for me.<br />
                I don't like the fact that it,
                learned to premiere before it knew how to sound.<br />
                You can premiere, you can sound, but can you influence?<br /><br />
           
                One afternoon I said to myself,
                "Why isn't the composer more unmelodious?"<br />
                Down, down, down into the darkness of the composer,<br />
                Gently it goes - the dissonant, the mellisonant, the unmelodic.<br /><br />
           
                Pay attention to the musician,
                the musician is the most zany performer of all.<br />
                A musician is unreasonable. a musician is cuckoo,
                a musician is clownish, however. 
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
                  xmlhttp.open("GET","polls/freeverse_vote.php?vote="+int,true);
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
                
                    <img class="allround" src="images/sm_music.jpg" alt="Free Verse Music" width="250" height="250" />
                </div> <!-- /image centered -->
            </div> <!-- /poll -->
            
        </aside>

 <?php include "bottombit.php"; ?>       
        

