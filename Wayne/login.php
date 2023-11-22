<?php
// Ensure the session is started on every page where you want to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['email'])) {
    // Redirect to the login page if not logged in
    header('Location: index.html');
    exit();
}

// Display the dashboard content
?>

<!DOCTYPE html>
<html>
<head>
<title>Sunday Roast Recipe</title>
</head>
<body>

<h1 id="title">Sunday Roast Recipe</h1>

<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.hawksmoornyc.com%2Fsunday-roast%2F&psig=AOvVaw1eyJuLnTy1AB6KXeVRRM4i&ust=1698383510805000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNiXp-P5koIDFQAAAAAdAAAAABAE" alt="Sunday roast image">

<p>Sunday roast is a traditional British meal that is typically served on Sundays. It consists of roasted meat, potatoes, and vegetables.</p>

<section id="ingredients">
<h2>Ingredients</h2>
<ul>
<li>1 medium-sized beef sirloin roast (about 2kg)</li>
<li>2 tablespoons olive oil</li>
<li>1 teaspoon salt</li>
<li>1/2 teaspoon black pepper</li>
<li>1kg potatoes, peeled and quartered</li>
<li>500g carrots, peeled and halved</li>
<li>500g parsnips, peeled and halved</li>
<li>2 onions, peeled and quartered</li>
<li>4 cloves garlic, crushed</li>
<li>1 teaspoon dried thyme</li>
<li>1/2 teaspoon dried rosemary</li>
<li>1/2 cup red wine (optional)</li>
<li>1/2 cup beef stock</li>
</ul>
</section>

<section id="instructions">
<h2>Instructions</h2>
<ol>
<li>Preheat the oven to 180 degrees Celsius (350 degrees Fahrenheit).</li>
<li>Heat the olive oil in a large roasting pan over medium heat.</li>
<li>Season the beef roast with salt and pepper. Add the beef to the roasting pan and brown on all sides.</li>
<li>Add the potatoes, carrots, parsnips, onions, garlic, thyme, and rosemary to the roasting pan. Stir to combine.</li>
<li>Pour the red wine and beef stock over the vegetables. (Note: The red wine is optional, but it adds a nice flavor to the roast.)</li>
<li>Cover the roasting pan with foil and roast for 2 hours. Remove the foil and roast for an additional 30 minutes, or until the beef is cooked to your liking.</li>
<li>Let the roast rest for 10 minutes before slicing and serving.</li>
</ol>
</section>

<section id="tips">
<h2>Tips</h2>
<ul>
<li>For a more flavorful roast, marinate the beef overnight in a mixture of red wine, olive oil, garlic, and herbs.</li>
<li>If you don't have a roasting pan, you can use a large baking dish. However, the roast may not brown as evenly.
<li>To check if the beef is cooked through, insert a meat thermometer into the thickest part of the roast. The beef is done when the internal temperature reaches 145 degrees Fahrenheit (63 degrees Celsius) for medium-rare or 160 degrees Fahrenheit (71 degrees Celsius) for medium-well.
<li>Serve the roast with your favorite sides, such as Yorkshire pudding, gravy, and roasted vegetables.
</ul>
</section>

</body>
</html>


 href="logout.php">Logout</a>
    </div>
</body>
</html>