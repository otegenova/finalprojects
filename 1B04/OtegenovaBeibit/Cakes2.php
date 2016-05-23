
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/Cakes2.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
        	<img src="images/pudd2.jpg" id="img1"/>
            <a href="#" id="name">White Chocolate And Blueberry Rice Pudding</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:8</p>
<p> 2 cups whole milk </p>

    <p>1 cup pouring cream</p>
    <p> 1 tsp vanilla essence</p>
    <p> 1 tbsp castor sugar </p>
    <p> 2/3 cup medium grain (or long grain) rice </p>
    <p> 150 g white chocolate, roughly chopped </p>

<p> 2 cup blueberries (fresh or frozen) </p>

    <p>extra blueberries, to serve</p>
    <p> shaved white chocolate/coconut flakes, to serve <p/>
  
    

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Combine milk, cream, sugar, vanilla and rice in the saucepan. Bring to the boil over medium-high heat. Reduce heat to medium-low. Simmer, uncovered, for 30 minutes or until rice is tender. add the white chocolate and blueberries and simmer for a further 15 minutes or until the blueberries have melted completely and tinted the pudding. Continue to add more milk if the mixture sticks to the bottom or becomes dry.</p>

    <p>LDivide among serving bowls. Top with fresh blueberries and shaved white chocolate or sweetened coconut flakes.</p>



</div>
            </div> 
          </div>
      </div>
    </div>
</div>
<script src="jquery-1.12.3.js"></script> 
<script src="jquery.js"></script> 
<script> 
var t = 1; 
$(document).ready(function(){ 
$("#img1").click(function(){ 
if(t==3){ 
$(this).closest("#cont").find("#img1").attr("src","images/pudd2.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/pudd22.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/pudd23.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/footer.php"); ?>
  


  

</body>
</html>

  