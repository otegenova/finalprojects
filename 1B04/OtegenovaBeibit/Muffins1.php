
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/Muffins1.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
        	<img src="images/muff2.jpg" id="img1"/>
            <a href="#" id="name">White Chocolate Cherry Mud Cake, Lemon Mousse, Pink Popcorn Glass</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:Makes 6</p>
<p><b>White Chocolate Cherry Mud Cake</b></p>

    <p> 125 g butter, roughly chopped </p>
    <p> 100g white chocolate, roughly chopped </p>
    <p> 1 cup castor sugar</p>
    <p> 1/3 cup water </p>
    <p> 1/4 cup cherry syrup (from the jar)</p>

<p> 1 cup plain flour</p>

    <p> 1 tbsp self-raising flour</p>
    <p> 1/4 cup buttermilk<p/>
    <p> 2 medium eggs, lightly whisked </p>
    <p> 3-4 drops pink food colouring</p>
    <p><b> Lemon Mousse </b></p>
    <p> (this will make a lot of mousse. The recipe can either be halved or served as a dessert on its own) </p>
    <p> 1 cup lemon curd</p>
    <p> 3/4 cup whipping cream </p>
    <p> 1/4 cup powdered sugar</p>
    <p> 2 tsp powdered gelatine </p>
    <p> 1 tbsp water</p>
    <p> <b>Pink Popcorn Glass</b> </p>
    <p> 1 cup sugar</p>
    <p> 1/4 cup water </p>
    <p> 1 cup pink popcorn, crushed</p>
    

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
                <p><b>White Chocolate Cherry Mud Cake</b></p>
<p>Preheat oven to 160 degree C. Brush a 7 inch square or round cake pan with melted butter. Line the bases and sides with non-stick baking paper.</p>

    <p>Combine the butter, chocolate, sugar, water and cherry syrup in a heatproof bowl over a saucepan of simmering water. Stir until the mixture is smooth. Remove from heat and let cool for 10 minutes. Whisk in combined flour. Stir in buttermilk and egg. Add the pink food colouring and mix till uniformly coloured. Pour into prepared pan and bake for 1 hour or until a skewer inserted into the centres comes out clean. Set aside for 10 minutes to cool slightly then invert onto a wire rack to cool completely.</p>

<p>Once cooled, cut into rectangles of 3 by 1.5 inch and keep aside.</p>
  <p><b> Lemon Mousse </b></p>
    <p>In a small bowl mix the gelatine and water and set aside for 5 minutes for the gelatine to bloom. Either in the microwave or using the double boiler method, gently heat the mixture so that the gelatine dissolves completely. Cool to room temperature.</p>
    <p>Whisk the whipping cream and sugar till you reach soft peaks. Fold in the lemon curd gradually. Add the gelatine mixture and fold through. Refrigerate for at least 4 hours, preferably overnight.</p>
    <p> <b>Pink Popcorn Glass</b> </p>
    <p>Line a baking tray with non-stick baking paper. Spread the popcorn over the tray.</p>
    <p>Combine the sugar and water in a small saucepan. Stir over low heat until the sugar completely dissolves. Bring to the boil. Boil, without stirring, occasionally brushing down side of the pan with a wet pastry brush, for 10-12 minutes or until golden.</p>
    <p>Pour toffee evenly over the popcorn in the baking tray. Set aside for 10 minutes to set. Break into shards.</p>
    <p>To serve : Fill up a piping bag with the lemon mousse and pipe swirls on a mud cake base. Repeat with the remaining bases. Top with Maraschino Cherries and popcorn glass.</p>

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
$(this).closest("#cont").find("#img1").attr("src","images/muff2.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/muff22.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/muff23.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/footer.php"); ?>
  


  

</body>
</html>

  