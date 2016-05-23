
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/breakfast1.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
          <img src="images/breakfast1.jpg" id="img1"/>
            <a href="#" id="name">Breakfast Poppy Seed Crepes with Strawberries and Yoghurt</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:Serves 6</p>
<p>1 cup plain flour</p>

    <p>2 eggs, lightly beaten</p>
    <p>11/2 cups milk</p>
    <p>11/2 tbsp. butter, melted</p>
    <p>2 tbsp. poppy seeds</p>
    <p>1 cup low-fat Greek yoghurt</p>

<p>1 tbsp. raspberry preserves (or any preserve/jam of your choice)</p>

    <p>Fresh strawberries or raspberries, to serve</p>
  

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">

    <p>Place flour into a bowl. Whisk milk and eggs together in a jug. Add milk mixture to flour. Add the melted butter and whisk until well combined. Fold in the poppy seeds. Let the batter for 30 minutes.
Meanwhile place the yoghurt and raspberry preserve in a mixing bowl. Gently mix the two together to create a swirl effect.</p>

<p>Place a non-stick frying pan over medium heat. Pour 2 1/2 tablespoons batter into the pan. Swirl to cover base. Cook for 2 to 3 minutes or until light golden. Turn over and cook for 1 minute. Transfer to a plate. Repeat with remaining batter.</p>

    <p>Place 2 tablespoons of yoghurt mixture in the centre of a crepe. Fold into triangles to enclose the filling. Repeat with the remaining mixture and crepes. Divide among serving plates. Decorate with fresh sliced strawberries.</p>
    

</div>
            </div> 
          </div>
      </div>
<!--     </div>
</div> -->
<script src="jquery-1.12.3.js"></script> 
<script src="jquery.js"></script> 
<script> 
var t = 1; 
$(document).ready(function(){ 
$("#img1").click(function(){ 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/breakfast1.jpg"); 
t=1; 
return; 
} 
if(t==1){ 
$(this).closest("#cont").find("#img1").attr("src","images/breakfast12.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/footer.php"); ?>
  


  

</body>
</html>
