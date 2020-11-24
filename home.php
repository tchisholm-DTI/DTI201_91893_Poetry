<!DOCTYPE html>
<html lang="en">

<head>
    
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="The Poetry Project challenges users to see of they can tell whether a poem has been created by a human or a computer">
    <meta name="keywords" content="Poetry, project, computer generated, free verse, haiku, limerick, acrostic">
    <meta name="author" content="Tina Chisholm">
    
    <title>The Poetry Project</title>
    
    <!-- link to css goes here -->
    <link href="css/poetry_style.css" rel="stylesheet">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC%7cRoboto&display=swap" rel="stylesheet">
    
</head>

<body>
    
    <div class="wrapper">
        
        <header>
            <h1>The Poetry Project</h1>
        </header>
        
        <nav>
            
            <a class="dropbtn" href="index.php">Home</a> |
            
            <div class="dropdown">
                <a class="dropbtn" href="#">Poetry<span class="littlearrow">&#9660;</span></a>
                <div class="dropdown-content">
                    <a href="freeverse.php">Free Verse</a>
                    <a href="haiku.php">Haiku</a>
                    <a href="limmerick.php">Limerick</a>
                    <a href="acrostic.php">Acrostic</a>
                </div> <!-- / end of dropdown-content -->
            </div> <!-- / dropdown -->
            |
            
            <a class="dropbtn" href="sources.php">Sources</a> |
            <a class="dropbtn" href="contact.php">Contact</a> 
                       
        </nav>
        
        <main>
            <table>
                <tr>
                    <td><span class="poemtype">Free Verse</span></td>
                    
                    <td>
                        <button onclick="hideContent()" class="showhide">Learn more...</button>
                    </td>
                    
                </tr>
                
            </table>
            
            <div id="hidden">
                <div class="info">
                    According to the Wikipedia, <a href=" https://en.wikipedia.org/wiki/Free_verse" target="_blank"> free verse</a> is where a poem does not have to rhyme or have a specific structure / beat.  In free verse it is still common to use various poetic techniques such as alliteration, onomatopoeia and repetition.
                    Source:<a href="https://en.wikipedia.org/wiki/Free_verse" target="_blank"> https://en.wikipedia.org/wiki/Free_verse</a>

                
                </div> <!-- /info box -->
            </div> <!-- /hidden -->
            
            <table>
                <tr>
                    <td><span class="poemtype">Free Verse 2</span></td>
                    
                    <td>
                        <button onclick="hideContent2()" class="showhide">Learn more...</button>
                    </td>
                    
                </tr>
                
            </table>
            
            <div id="hidden2">
                <div class="info">
                   Blah blah blah

                </div> <!-- /info box -->
            </div> <!-- /hidden -->
            
            <article>
                <h3>Music
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
            <h2>Generators</h2>
            <p>
                If you’d like to generate some poems for yourself, here are some online generators that you 
                can use…
            </p>
            
            <ul>
                <li><a href="https://www.poem-generator.org.uk/">Poem Generator</a></li>
                <li><a href="http://www.languageisavirus.com/automatic_poetry_generator.php">Language is a virus</a></li>
            </ul>
            
            <p>
                Know of a poetry generator not listed above?  Please <a href="contact.php"> let me know about it</a> and I will add it to the list.
            </p>
            
        </aside>
        
         <footer>
        &copy; Mrs Chisholm 2019    
        </footer>


</div>

<!-- Javascript to show/hide content -->

<script>
function hideContent() {
  var x = document.getElementById("hidden");
  if (x.style.display != "block") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    
function hideContent2() {
  var x = document.getElementById("hidden2");
  if (x.style.display != "block") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    
</script>

</body>

</html>