<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsu Recipes</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/recipes.css">
    <link rel="stylesheet" href="css/pagination.css">



</head>
<body>
<script src="js/page.js"></script>
<?php include 'fragments/header.php'; ?>
  <div class="container">
        <h1 class="page-title">Our Delicious Recipes</h1>
        
        
        <div class="recipes-grid">
            <div class="recipe-item">
                <img src="images/shaurma.png" alt="shaurma" class="recipe-image">
                <div class="recipe-content">
                    <h3 class="recipe-title">Shawarma</h3>
                    <p class="recipe-description">Tender spiced chicken or lamb wrapped in warm pita with crisp vegetables, tangy pickles, and rich tahini or garlic sauce. Smoky, savory, and incredibly delicious - the ultimate street food comfort meal you can easily make in your own kitchen.</p>
                </div>
            </div>

            <div class="recipe-item">
                <img src="/images/cesar.png" alt="Caesar Salad" class="recipe-image">
                <div class="recipe-content">
                    <h3 class="recipe-title">Caesar Salad</h3>
                    <p class="recipe-description">Fresh romaine lettuce tossed with homemade Caesar dressing, parmesan cheese, and crunchy croutons. A timeless salad that never goes out of style.</p>
                </div>
            </div>

            <div class="recipe-item">
                <img src="images/soup.png" alt="Simple Soup" class="recipe-image">
                <div class="recipe-content">
                    <h3 class="recipe-title">Simple Soup</h3>
                    <p class="recipe-description">A traditional comfort soup made with fresh vegetables, aromatic herbs, and savory broth. Warming, nourishing, and absolutely satisfying - perfect for a cozy meal at home.</p>
                </div>
            </div>

            <div class="recipe-item">
                <img src="images/fajitas.png" alt="hicken Fajitas" class="recipe-image">
                <div class="recipe-content">
                    <h3 class="recipe-title">Chicken Fajitas</h3>
                    <p class="recipe-description">Tender spiced chicken and caramelized vegetables served with warm tortillas, fresh toppings, and zesty sauces. Vibrant, customizable, and incredibly satisfying - the ultimate hands-on meal that brings everyone together around the table.</p>
                </div> 
            </div>

            <div class="recipe-item">
                <img src="images/rice.png" alt="Rice With vegetables" class="recipe-image">
                <div class="recipe-content">
                    <h3 class="recipe-title">Rice With vegetables</h3>
                    <p class="recipe-description">A traditional Asian-inspired dish made with fluffy rice, crisp vegetables, and aromatic seasonings. Colorful, nutritious, and absolutely delicious - perfect for using up leftovers in a satisfying one-pan meal.</p>
                </div>
            </div>

            <div class="recipe-item">
                <img src="/images/bread.png" alt="Bread" class="recipe-image">
                <div class="recipe-content">
                    <h3 class="recipe-title">Bread</h3>
                    <p class="recipe-description">A versatile yeasted bread made with simple flour, water, and salt. Soft, chewy, and absolutely perfect - ideal as a base for any toppings you crave.</p>
                </div>
            </div>
        </div>
    </div>


<div class="pagination">
            <button onclick="prevPage()">« Previous</button>
            <button class="active" onclick="goToPage(1)">1</button>
            <button onclick="goToPage(2)">2</button>
            <button onclick="goToPage(3)">3</button>
            <button onclick="nextPage()">Next »</button>
        </div>
    </div>


<?php include 'fragments/footer.php'; ?>

</body>
</html>