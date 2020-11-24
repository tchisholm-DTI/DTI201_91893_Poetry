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
} /* end hideContent function */
    
    
function hideContent2() {
  var x = document.getElementById("hidden2");
  if (x.style.display != "block") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} /* end hideContent2 function */
 
function swapSource() {
    var y = document.getElementById("showhide");
    /* swaps text on Sources page */
    
    if (y.innerHTML === "Hide Sources") {
        y.innerHTML = "View Sources";
    } else {
        y.innerHTML = "Hide Sources";
    }
    
} /* end swap source */
    
function swapPoem() {
    var y = document.getElementById("showhide");
    /* swaps text on Poetry pages */
    
    if (y.innerHTML === "Show Less") {
        y.innerHTML = "Show More";
    } else {
        y.innerHTML = "Show Less";
    }
    
} /* end swap 'showmore/show less' */
    
</script>

</body>

</html>

