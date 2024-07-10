-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 06:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipefinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(45) DEFAULT NULL,
  `admin_password` varchar(200) DEFAULT NULL,
  `admin_email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(5, 'Ololade', '$2y$10$cV2YFvZXkLZamEVO7B6DJ.3rrjigMO2SkDilKNaSenM.f7KoTkGFe', 'lolly@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(12, 'Nigerian Cuisine'),
(13, 'Italian Cuisine'),
(14, 'Chinese Cuisine'),
(15, 'Appetizer'),
(16, 'Main Cuisine'),
(17, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `created_at`, `is_read`) VALUES
(1, 'A new recipe \'Thai red duck curry recipe\' has been added by John.', '2024-06-19 16:14:14', 1),
(2, 'A new recipe \'Fruity buttermilk pancakes recipe\' has been added by John.', '2024-06-19 17:28:23', 1),
(3, 'A new recipe \'Lemon chicken with rosemary potatoes recipe\' has been added by Blessing.', '2024-06-19 17:46:10', 1),
(4, 'A new recipe \'Basmati Fried Rice\' has been added by John.', '2024-06-19 18:39:03', 1),
(5, 'A new recipe \'Nigerian Grilled Fish (Grilled Tilapia)\' has been added by Blessing.', '2024-06-19 19:21:59', 0),
(6, 'A new recipe \'Boiled Plantain\' has been added by John.', '2024-06-19 20:49:26', 0),
(7, 'A new recipe \'Plantain Porridge Recipe\' has been added by Blessing.', '2024-06-20 00:23:54', 0),
(8, 'A new recipe \'White chocolate cheesecake recipe\' has been added by John.', '2024-06-20 12:04:45', 0),
(9, 'A new recipe \'Pineapple daiquiri recipe\' has been added by Blessing.', '2024-06-20 12:54:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(100) DEFAULT NULL,
  `recipe_desc` text DEFAULT NULL,
  `recipe_instruction` text DEFAULT NULL,
  `recipe_ingredient` text DEFAULT NULL,
  `recipe_img` varchar(200) DEFAULT NULL,
  `recipe_cooktime` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `recipe_dateadded` datetime NOT NULL DEFAULT current_timestamp(),
  `author` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `admin_id` int(11) NOT NULL,
  `recipe_status` enum('Published','Pending','NotPublished') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `recipe_desc`, `recipe_instruction`, `recipe_ingredient`, `recipe_img`, `recipe_cooktime`, `category_id`, `userid`, `recipe_dateadded`, `author`, `role`, `admin_id`, `recipe_status`) VALUES
(38, 'Carrot and Egg Omelette Recipe', ' This Chinese-style omelette is made with just a handful of ingredients you probably already have in your fridge. We like ours served with rice and a drizzle of hot sauce.', '1. Beat the eggs in a bowl. Add a pinch of salt and white pepper, and half the green spring onions; whisk well.\r\n 2. Heat the oil in a small 24cm frying pan, add half the white spring onions and half the ginger. Saut&eacute; for 1 min until aromatic.\r\n 3. Add half the carrots. Stir-fry for 4-5 mins on a high heat until the carrots are cooked and softened. Add more oil if needed.\r\n 4. Spread out the veg, then add half the beaten eggs. Cook for another 1-2 mins, then carefully flip the omelette. Remove from the pan. Repeat to make a second omelette with the rest of the eggs, carrots, ginger and white spring onions.\r\n 5. Serve the omelettes on top of rice and garnish with the remaining green spring onions. Top with a sprinkle of sesame seeds and a drizzle of chilli oil, sriracha or any sauce of your choice, if you like. Enjoy!', '4 eggs, white pepper, to taste, 2 spring onions, finely sliced, separated into greens and whites; 1 tbsp vegetable oil\\&quot;\r\nsmall piece of ginger, sliced into matchsticks\r\n1 large carrot (or 2 small carrots), peeled and julienned rice, to serve\r\nsesame seeds, to serve (optional) , sriracha sauce or chilli oil, to serve (optional)', '17165538092133725229.jpg', '15 mins', 17, 4, '2024-05-24 13:30:09', 'Blessing', 'user', 0, 'Published'),
(39, 'Chicken Jollof Rice Recipe', 'Chicken jollof rice is a flavorful and spicy West African dish that\\&#039;s sure to satisfy. Made with chicken thighs, rice, and a blend of spices and vegetables, this dish is the ultimate comfort food.', '1. Add the tomatoes, red bell pepper, quartered onion, and pepper to a blender and blend until smooth.\r\n 2. In a pot over medium heat, add 2 tablespoons oil, diced red onion, chicken, and curry powder. Cook until onions are soft and chicken has browned, about 8-10 minutes. Remove chicken from pot and set aside.\r\n 3. Raise heat to medium-high, and using the same pot, add pureed tomato mixture, cooking until reduced by half.\r\n 4.  Add in remaining oil, and fry sauce for 8-10 minutes.\r\n 5. Stir in chicken, along with rice, stock and thyme leaves.\r\n 6. Cover pot tightly with foil. Cover with lid and reduce heat to low, cooking for 30 minutes.\r\n 7. Once rice is cooked, fluff up before serving.', '6 medium tomatoes, sliced, 1 red bell pepper, stemmed, seeded and quartered, 2 small red onions, 1 quartered, 1 diced;\r\n1 scotch bonnet pepper, or habanero, stem removed,\r\n&frac12; cup vegetable oil(120 mL), plus 2 tablespoons,\r\n1 lb boneless chicken thighs(450 g), cubed,\r\n2 teaspoons curry powder,\r\n1 teaspoon dried thyme,\r\n2 cups parboiled long grain rice(400 g), washed,\r\n2 stock cubes stock,\r\n&frac34; cup water(180 mL).', '17168415392112417134.jpg', '2hours 15mins', 12, 0, '2024-05-27 21:25:39', 'Ololade', 'admin', 5, 'Published'),
(40, 'Strawberry Milkshake Recipe', 'A milkshake is a heavy creamy drink that is often used as a dessert. Once you blend any fruit or vegetable with whole milk, it becomes a milkshake. Milkshakes are the perfect drink for a hot day.\r\n\r\n', '1. Wash, trim and cut the strawberries into small pieces and place in your blender.\r\n 2. Scoop some vanilla ice cream or Greek-style yoghurt (if you are using any of these) into the blender.\r\n 3. Turn on the blender and start pouring the whole milk through the peep hole of the blender cover till you are happy with the thickness of your milkshake.', 'Strawberries (very ripe ones), Whole milk, Vanilla Ice cream (Optional)\r\nGreek-style yoghurt (optional)', '1716842307693506308.jpg', '15 minutes', 17, 0, '2024-05-27 21:38:27', 'Ololade', 'admin', 5, 'Published'),
(41, 'Peppered puffpuff Recipe', 'Peppered Puff Puff is the hot and spicy version of the classic Nigerian Puff Puff. If you want some zing in your Puff Puff, you will be able to do so using the recipe on this page.\r\n\r\n', '1. Sift the flour into a clean dry bowl, add the nutmeg, yeast, sugar and salt. Mix well.\r\n 2. Add warm water and mix till everything is well combined.\r\n 3. Cover the bowl with aluminum foil or plastic film and place in a warm place to rise for 45 minutes or till double in size.\r\n 4. Cut the habanero pepper into timy pieces and add the batter. Stir very well.\r\n 5. Pour some oil in a deep pot and allow to heat up. The oil should be at least 3 inches deep. This is to give room for the puff puffs to swim in the oil. It\\&#039;s not advisable to use a deep fryer for Puff Puff because of the netting but if you want to use it, set the temperature to 170&deg;C.\r\n 6. Test that the oil is hot enough by putting a drop of batter into the oil. If it sizzles and comes up to the surface of the oil, then the oil is hot enough. If the oil is not hot enough, the batter will go down to the bottom of the oil and stay there.\r\n 7. When the oil is hot enough, scoop some batter into the oil with an ice cream scoop.\r\n 8. Put in more scoops of the batter, as much as the space in the frying pot will allow without overcrowding.\r\n 9.Reduce the heat to medium.\r\n 10. Once the underside of the puff puff has turned golden brown, flip the ball so that the topside will be fried as well.\r\n 11. When the puff puff balls are golden all over, take them out and place in a sieve lined with paper towels.', '200g (1&frac12; cups) plain flour (all purpose flour), 2 teaspoons yeast (instant or quick action), &frac12; teaspoon ground nutmeg,\r\n&frac14; cup granulated sugar (or to your taste),\r\n1 habanero pepper (atarodo, ose oyibo, atarugu),\r\n3 pinches of salt,\r\n1 cup warm water,\r\nVegetable Oil (for frying)', '17168430902126023962.jpg', '1 hour 15mins', 15, 0, '2024-05-27 21:51:30', 'Ololade', 'admin', 5, 'Published'),
(42, 'Cherry, lemon and polenta cake Recipe', 'Inspired by the flavours of Italy, this moist cake is full of zesty lemon, sweet cherries and almond notes. Serve gently warmed with a dollop of mascarpone, and a sprinkle of toasted almonds.\r\n\r\n', '1. Preheat the oven to 190&deg;C, fan 170&deg;C, gas 5. Grease and line the base of a 23cm round, loose bottom cake tin. Whisk the butter and 250g sugar together in a mixing bowl using an electric handheld whisk for 3-5 mins until light and fluffy.\r\n 2. Beat in the eggs, one at a time, until combined, then beat in the yogurt and lemon zest (don\\&#039;t worry if it looks a little split at this point).\r\n 3. Mix the polenta, almonds and baking powder together in a mixing bowl, then fold into the batter until just combined. Fold in 180g of the cherries, then spoon into the prepared baking tin and level out.\r\n 4. Scatter over the remaining cherries and the flaked almonds and bake in the centre of the oven for 50 mins, loosely covering with foil after 30 mins until a skewer inserted into the centre comes out clean.\r\n 5. About 5 mins before the cake is ready, put the lemon juice and remaining 20g caster sugar into a small saucepan and simmer for 1-2 mins until the sugar has dissolved and the liquid has become syrupy.\r\n 6. As soon as the cake comes out of the oven, pour over the syrup, then allow to cool for 15 mins before removing from the tin to cool on a wire rack.\r\n 7. To serve, dust with icing sugar (if using) and enjoy slightly warm with a spoonful of mascarpone, if you like.\r\n 8. The cake will keep for up to 3 days in an airtight container. To serve, warm the whole cake loosely cover in foil in a low oven for 15 mins.', '250g unsalted butter, softened plus extra for greasing, 270g caster sugar, 4 large eggs, lightly beaten, 170g low fat natural yogurt\r\nfinely grated zest and juice of 1 large lemon, 200g fine polenta,\r\n120g ground almonds, 2&frac12; tsp baking powder\r\n250g cherries, pitted and halved (or 250g frozen cherries), 3 tbsp flaked almonds, mascarpone, to serve (optional)\r\n1 tsp icing sugar, to serve (optional)', '1716895383351247056.jpg', '50 minutes', 15, 4, '2024-05-28 12:23:03', 'Blessing', 'user', 0, 'Published'),
(43, 'Creamy smoked salmon and lemon pasta Recipe', ' This succulent smoked salmon pasta dish comes with a zingy lemon twist &mdash; transforming this simple meal into something really special. Ready in less than half an hour, this rich and creamy bowl of tagliatelle is not only a doddle to cook, but is also the perfect base for the mild, delicate flavours of our oak- and beech-smoked salmon.\r\n\r\n', ' 1. Bring a pan of salted water to the boil and cook the pasta for 2 mins less than pack instructions.\r\n 2. Meanwhile, heat the oil in a large frying pan over a medium heat. Add the garlic and fry for 2-3 mins until softened but not coloured.\r\n 3. Stir in the cr&egrave;me fra&icirc;che, lemon juice, Parmesan and 2 ladles of pasta cooking water. Allow to bubble gently for 1 min.\r\n 4. Drain the tagliatelle and mix into the sauce in the frying pan. Cook for a further 2 mins or until reduced to a creamy sauce that coats the pasta.\r\n 5. Stir through the smoked salmon and chives, season with black pepper, then divide between 4 bowls. Garnish with the lemon zest and top with a handful of rocket.', ' 350g tagliatelle, or pasta of your choice,\r\n1 tbsp olive oil,\r\n3 garlic cloves, finely sliced,\r\n5 tbsp crème fraîche,\r\n1 lemon, zested (finely grated) and juiced,\r\n2 tbsp grated Parmesan,\r\n200g smoked salmon, torn into strips,\r\n30g fresh chives or dill, finely chopped,\r\n70g bag rocket, to serve.', '17168955841241698703.jpg', '15 minutes', 13, 4, '2024-05-28 12:26:24', 'Blessing', 'user', 0, 'Published'),
(44, 'Citrus and bay Spritz Recipe', 'Make up a this zesty, fresh non-alcoholic aperitivo with your pre-dinner nibbles and recreate that holiday feeling at home. Citrus fruits, fresh bay leaves muddled with Martini Vibrante and a splash of tonic make this the perfect low and no drink option for summer.', '1. Rub the inside of two tall glasses with the rosemary sprigs, and pop one in each glass.\r\n2. To make the bay syrup, mix together the bay leaves, caster sugar and 1 tbsp water in a small saucepan.\r\n3. Bring to a simmer and cook until the sugar has dissolved. Remove from the heat and allow to cool.\r\n4. In a jug or cocktail shaker, mix together the Martini Vibrante, bay syrup and ice cubes together.\r\n5. Divide the mixture between the two glasses and top with tonic water. Serve with lemon and orange slices in the glass, along with the bay and rosemary leaves.', '2 sprigs of rosemary,\r\n2 bay leaves,\r\n1 tbsp caster sugar,\r\n150ml Martini Vibrante,\r\nfew handfuls ice cubes,\r\n200ml tonic water,\r\nlemon &amp; orange slices, to serve.', '1716895963464677037.jpg', '10 minutes', 17, 4, '2024-05-28 12:32:43', 'Blessing', 'user', 0, 'Published'),
(45, 'Chicken noodle stir fry Recipe', 'You can\\&#039;t go wrong with a classic chicken stir-fry recipe. This simple recipe combines sticky soy sauce glazed chicken thighs with plenty of veg, toasted cashews and noodles for dinner on the table in half an hour.\r\n\r\n', '1. Boil the noodles, following pack instructions, then drain and set aside.\r\n2.  Meanwhile, heat the sesame oil in a wok or large frying pan over a high heat until very hot. Add the chicken and stir-fry for 6-7 mins until golden and crispy.\r\n3. Add the soy sauce and honey and heat for 30 secs until bubbling and the chicken is coated. Tip the contents of the pan into a bowl and set aside. Wipe out the pan with kitchen paper.\r\n4. Add the vegetable oil to the pan, then add the garlic and ginger and cook for 30 secs. Add the broccoli, baby corn, mushrooms and pepper, then stir-fry for 3-4 mins, continually tossing the mixture to help it cook evenly.\r\n5. Add the cashews and edamame beans and toss for 1 min. Return the chicken to the pan, stir to combine and serve over the noodles.', '2 nests dried egg noodles,\r\n1 tbsp sesame oil,\r\n3 skinless boneless chicken thighs, cut into strips,\r\n3 tbsp soy sauce,\r\n2 tbsp honey,\r\n1 tbsp vegetable oil,\r\n1 garlic clove, peeled and finely sliced,\r\n3cm piece ginger, peeled and cut into matchsticks,\r\n100g Tenderstem broccoli, halved and cut lengthways,\r\n100g baby corn, thickly sliced diagonally,\r\n75g chestnut mushrooms, sliced,\r\n1 yellow pepper, deseeded and cut into strips,\r\n50g raw cashew nuts, toasted,\r\n150g pot fresh edamame beans.', '1716896878834940828.jpg', '15 minutes', 14, 14, '2024-05-28 12:47:58', 'John', 'user', 0, 'Published'),
(46, 'Vegetable curry spring rolls Recipe ', 'Chef Kwoklyn says: \\&quot;As New Year dawns, families gather to indulge in food symbolising hopes for the year ahead. Spring rolls are among the favourites.\\&quot;\r\n\r\n', '1. Heat the oil in a wok over a medium-high heat; fry the onion for 6-8 mins. Add the garlic and spring onions; fry for another 1-2 mins, then add the stir-fry veg and fry for 2 mins more.\r\n  2. Meanwhile, preheat the oven to gas 6, 200&deg;C, fan 180&deg;C; put a baking tray with a wire rack on top inside to heat up. Whisk the soy sauce and cornflour together in a small bowl; set aside.\r\n 3. Add the sugar, curry powder, turmeric and cumin to the wok and toss to coat; season with white pepper. Stir in the bamboo shoots and soy sauce mix. Tip everything onto a large baking sheet, divide into 10 portions and set aside for 5 mins to cool.\r\n 4. Beat the egg with 2 tbsp water in a small bowl. Place a filo sheet on a board with a corner pointing towards you and brush the edges with eggwash. Spoon 1 portion of the cooled veg mix onto the lower third of the pastry, then fold the tip of the corner over the filling to create a cylinder about 8cm long.\r\n 5. Turn in the sides to enclose, then continue to roll. Set aside and repeat with the remaining pastry and filling. Transfer to the preheated rack and brush with the remaining eggwash. Bake for 20-22 mins until golden and crispy; set aside for 5-10 mins to cool slightly. Serve with curry sauce for dipping, if you like.', '2 tbsp vegetable oil,\r\n1 large onion, thinly sliced,\r\n4 garlic cloves, crushed,\r\n100g bunch spring onions, shredded,\r\n2 x 320g packs Chinese-inspired stir-fry mix,\r\n2 tbsp reduced-salt soy sauce,\r\n1 tbsp cornflour,\r\n&frac12; tsp granulated sugar,\r\n3 tbsp medium curry powder,\r\n1&frac12; tsp ground turmeric,\r\n&frac12; tsp ground cumin,\r\nwhite pepper, to season,\r\n225g tin bamboo shoots, drained and cut into matchsticks,\r\n1 medium egg,\r\n10 sheets filo pastry (from a 250g pack),\r\ncurry sauce, to serve (optional).', '17169026851210424959.jpg', '30 minutes', 15, 0, '2024-05-28 14:24:45', 'Ololade', 'admin', 5, 'Published'),
(47, 'Chinese Fried Rice', 'This homemade version of the take-out classic is made with just seven ingredients and all in one pan. It comes together in no time at all, is super flexible, and 100% budget-friendly. Don&rsquo;t like chicken? Just swap it out for your favorite protein and create the fried rice of your dreams. With a recipe this easy, who needs take-out?', '1. Heat a wok over medium-high heat for 5 minutes. Add the oil then stir in eggs and fry until just cooked. Once cooked, remove eggs from the wok and set aside.\r\n2. Heat up the wok until smoking hot and pour in the oil.\r\n3. Add the chicken breast and fry until they are just cooked.\r\n4. Add the rice and keep frying until they turn slightly brown.\r\n5. Add the vegetables and fry everything together until they are thoroughly cooked.\r\n6. Pour in the soy sauce and stir.\r\n7. Add the cooked eggs back in and toss them around until they break into pieces.\r\n8. Add in the spring onions and serve.\r\n9. Enjoy!', '&frac12; cup oil(100mL),\r\n4 eggs,\r\n1 pinch salt,\r\n&frac12; lb boneless, skinless chicken breast(200g), sliced,\r\n1 &frac34; cups rice(400g), cooked,\r\n5 oz mixed vegetable(150g),\r\n&frac14; cup light soy sauce(50mL),\r\n1 oz spring onion(30g).', '17169031271252806636.jpg', '35 minutes', 16, 0, '2024-05-28 14:32:07', 'Ololade', 'admin', 5, 'Published'),
(48, 'Okro Soup', 'Okro Soup (Okra Soup) is one of the easiest Nigerian Soups you can whip up. With one taste the burst of flavors in this oil free version will definitely surprise you.', '1. Wash the stock fish and cow feet and put in the pot with water that covers the meats completely add bouillon powder and start cooking.\r\n 2. Cook the cow feet and stock fish till soft but not mushy. Usually takes about 1 hr on the stove top.\r\n3. While the stock fish and cow feet are cooking, wash okro and chop by hand or in a food processor and set aside.\r\n4. Blend the onions, red bell peppers and habanero/Jamaican hot pepper and set aside. When the cow feet and stock fish have cooked for about 40 mins, add the smoked turkey, crayfish and blended bell peppers.\r\n 5. Allow cook for another 10 mins before adding ground Ogbono. Lower heat and allow to simmer for a further 10 mins. Stir constantly to prevent burning.\r\n 6. Stir the chopped okro, Turn off heat and move pot away from the hot burner.\r\n 7. Pour the soup out of the pot into a big bowl to stop the okro from cooking further and to ensure it retains its fresh green look.\r\n 8. Soup is ready enjoy as is or with any swallow of your choice YUM!!!', '800 g Fresh Okro ( cut up in thin rings by hand or with a food processor.),\r\n2 Medium Onions,\r\n2 Large red bell peppers,\r\n2 habanero or Jamaican hot pepper,\r\n&frac12; cup crayfish,\r\n6 tablespoon or 50g ground Ogbono,\r\nBouillon powder/ salt to taste,\r\n600 g cow feet,\r\n700 g smoked turkey,\r\n300 g stockfish.', '17169037561580430585.jpg', '30 minutes', 16, 0, '2024-05-28 14:42:36', 'Ololade', 'admin', 5, 'Published'),
(49, 'Plantain Omellete Recipe', 'Plantain Omelette gives you the chance to enjoy an exotic breakfast of omelette with fried plantains in one dish.', '1. Fry the onions in a small quantity of vegetable oil for 1 minute.\r\n2. Add the tomato, frankfurters and green peas and fry for 2 minutes.\r\n3. Pour the result into the egg, add the sliced leaf vegetables and stir.\r\n4. Heat a small quantity of vegetable oil and pour the egg mix from step 3 into the pan such that the mix is well spread out to cover the pan.\r\n5. Reduce the heat to very low and once the edge of the omelette cakes, lay the fried plantains flat on the omelette to cover it.\r\n6. Shake your frying pan from time to time and once the plantain omelette cakes all over, gently transfer it to a flat plate, Slice up like pizza and enjoy.', '1 ripe plantain,\r\n2 eggs,\r\n1 frankfurter (Satis),\r\n&frac12; a tomato,\r\n&frac12; an onion,\r\n&frac12; teaspoon salt,\r\n2 tablespoons green peas,\r\nA few leaves leafy vegetables,\r\nVegetable oil,\r\nHabanero pepper (optional).', '1716904101634968388.jpg', '15 minutes', 12, 0, '2024-05-28 14:48:21', 'Ololade', 'admin', 5, 'Published'),
(50, 'Italian Pizza Recipe', 'A pizza with simple flavours and a supple, thin crust, that\\&#039;s cooked in a very hot oven. The recipe is elegantly simple: a perfect crust, tangy tomato sauce, fresh mozzarella, and a bright green homemade basil pesto.', '1. For the dough, first mix flour, sugar, and salt. Dissolve the yeast in lukewarm water and roughly knead with the flour mixture.\r\n2. Now add olive oil and work mixture into a smooth dough.\r\n3. Cover the dough with a kitchen towel and allow to rise in a warm place for approx. 1 - 2 hours, until it has doubled in size.\r\n4. For the sauce, finely dice garlic and onion.\r\n5. Next saute the onion and garlic in vegetable oil until transluscent. Pour in the pureed tomatoes and season with sugar and a pinch of salt and pepper. Leave the sauce to reduce for approx. 5 - 7 mins. on a low heat.\r\n6. Preheat oven to 180*C. Next, roll out the dough to be approx. 0.5cm thin and place on a lined baking tray.\r\n7. Spread the tomato sauce evenly on the dough.\r\n8. Now, cut the mozzarella into slices and lay them evenly across the pizza. Then, bake the pizza in a preheated oven at 180*C for approx 20 - 25 min until golden brown.\r\n9. As soon as the pizza is finished, cover with arugula leaves and Parma ham. Quarter figs and distribute over the pizza. Enjoy served warm.', '280g all-purpose flour,\r\n7g dried yeast,\r\n150ml lukewarm water,\r\nKosher salt, to taste,\r\n4tsp sugar,\r\n20ml Olive oil,\r\n6 clove garlic,\r\n1/2 onion,\r\n250ml pureed tomatoes,\r\n125g Buffalo mozzarella,\r\n20g arugula leaves,\r\n100g Parma ham,\r\n3 figs,\r\nSalt as required,\r\nPepper as required.', '17169044651912257047.jpg', '1 hour 25mins', 13, 0, '2024-05-28 14:54:25', 'Ololade', 'admin', 5, 'Published'),
(51, 'Vegan Banana Bread', 'Classic banana bread has been given a vegan makeover for a teatime treat everyone can enjoy. This easy vegan recipe cake uses oil instead of butter and is topped with a sliced whole banana for a pretty, bakery-worthy finish.', '1. Preheat the oven to gas 4, 180˚C, fan 160˚C. Line a 2lb loaf tin with nonstick baking paper. Mash three of the bananas in a large mixing bowl. Add the sugar and oil and mix thoroughly to combine.\r\n2. Add the flour, ground almonds and cinnamon and stir to a smooth batter. If your batter seems very thick, add a splash of dairy-free milk to loosen.\r\n3. Pour the cake mix into the loaf tin, then halve the remaining banana lengthways. Sit both halves on top of the batter, cut-side facing up. Bake for 1 hr until a thin skewer inserted into the middle comes out clean.\r\n4. Turn out onto a wire rack and leave to cool to room temperature. Dust with icing sugar before slicing.\r\n5. Tip: Banana bread is a great blank canvas for adding different flavours try chopped vegan chocolate, raisins or swap the cinnamon for vanilla extract or orange zest. For a glossy finish to your banana bread, brush the bananas on the finished loaf with 1 tsp maple syrup.\r\n6. Enjoy!', '4 ripe bananas, peeled,\r\n200g soft light brown sugar,\r\n100ml vegetable oil,\r\n250g self-raising flour,\r\n50g ground almonds,\r\n1 tbsp cinnamon,\r\nicing sugar, for dusting.', '1716904717820972684.jpg', '1 hour 15mins', 17, 14, '2024-05-28 14:58:37', 'John', 'user', 0, 'Published'),
(52, 'Cosmopolitan Cocktail', 'A well-known fruity favourite that kickstarted the cocktail renaissance in the 90s. This classic throwback is sure to impress your guests, shake up your vodka, orange liqueur, lime and cranberry juice, pour it up and garnish with an orange twist.', '1. Shake all of the ingredients together in a cocktail shaker.\r\n2. Strain and pour into two tall, stemmed glasses.\r\n3. Garnish with a twist of orange peel.\r\n4. Enjoy!', '80ml vodka,\r\n40ml Cointreau or triple sec,\r\n20ml lime juice (about 1 large lime),\r\n60ml cranberry juice drink,\r\norange zest, to serve.', '17170683501920845476.jpg', '10 minutes', 17, 14, '2024-05-30 12:25:50', 'John', 'user', 0, 'Published'),
(53, 'Thai red duck curry recipe', 'This thai red curry with duck makes a special friday night dinner. Tender pieces of breast are cooked with coconut milk, aubergine, and Thai red curry paste. Fragrant and aromatic, it is best served with steamed rice and lime wedges. ', '1. Fry the duck, skin side down over a medium heat in a large, high sided frying pan for 10 mins. Flip over and cook for a further 5 mins. Remove from the pan and allow to rest. \r\n\r\n2. Tip out most of the fat from the pan then return to the heat and add the curry paste and aubergine.\r\n\r\n3. Fry for a few mins then add the ginger, baby corn and coconut milk. Simmer for 8 mins then add the mange tout and cook for a few minutes longer. \r\n\r\n4. Slice the duck breast and return to the pan to warm through or until the duck is cooked to your liking. Serve with coriander, steamed rice and lime wedges if you like. ', '2 duck breasts,\r\n2 tbsp Thai red curry paste,\r\n1 aubergine chopped into finger sized lengths,\r\n2cm piece ginger, finely chopped,\r\n175g baby corn and mange tout,\r\n400ml coconut milk,\r\nsmall bunch coriander, chopped,\r\nsteamed rice and lime wedges to serve,\r\nlime wedges to serve.', '17188136541554725416.jpg', '30 minutes', 14, 14, '2024-06-19 17:14:14', 'John', 'user', 0, 'Published'),
(54, 'Fruity buttermilk pancakes recipe', 'Start the day with these quick blueberry pancakes for an easy brunch. Light and fluffy pancakes are made with added honey and juicy berries. serve with a drizzle of maple syrup.', '1. Place the flour in a large bowl. Whisk in the eggs and honey then gradually whisk in the buttermilk and 1 tbsp oil to form a thick batter. Stir in the fruit.\r\n\r\n2. Heat a little extra oil in a frying pan and using a tablespoon, spoon some mixture into the pan to make 4 pancakes. Cook gently for 1-2 mins each side until golden and cooked through. Repeat to make 12 pancakes.\r\n\r\nTip: For an extra healthy option, use self-raising wholemeal flour. Ideal drizzled with honey or maple syrup and scattered with fresh fruit.', '150g self-raising flour,\r\n2 medium eggs,\r\n2 tbsp honey,\r\n150ml buttermilk,\r\n1 tbsp rapeseed oil, plus extra for frying,\r\n100g fresh blueberries or raspberries.', '17188181031127179529.jpg', '5 minutes', 16, 14, '2024-06-19 18:28:23', 'John', 'user', 0, 'Pending'),
(55, 'Lemon chicken with rosemary potatoes recipe', 'Everyone will enjoy this easy traybake that uses breaded chicken steaks roasted alongside lemony and potatoes and served with stir-fried cabbage! ', '1. Preheat the oven to gas 7, 220&deg;C, fan 200&deg;C. Toss the potatoes with 1 tbsp oil, the rosemary, bashed garlic and some seasoning in a large, shallow roasting tin roast for 10 mins. \r\n\r\n2. Add the chicken steaks and lemon wedges and cook for 20-25 mins until the chicken is crisp and cooked through, and the potatoes are tender. \r\n\r\n3. When the chicken has 5 mins left, heat the remaining oil in a frying pan over a medium-high heat and stir-fry the cabbage for 3-4 mins until tender and the edges are lightly golden.\r\n\r\n4.  Stir in the lemon zest and crushed garlic, then fry for 1-2 mins more until fragrant; season. \r\n\r\n5. Squeeze the roasted lemon over the chicken and potatoes and serve with the greens and black pepper.', '550g baby potatoes, halved lengthways,\r\n2 tbsp olive oil,​\r\n10g fresh rosemary, &frac12; leaves picked and chopped, &frac12; to garnish,\r\n4 garlic cloves, 3 bashed (skin on), 1 peeled and crushed,\r\n4 frozen breaded chicken steaks,\r\n1 lemon, zested and quartered,\r\n&frac34; sweetheart cabbage, thickly sliced.', '17188191701031940039.jpg', '40 minutes', 16, 4, '2024-06-19 18:46:10', 'Blessing', 'user', 0, 'Pending'),
(56, 'Basmati Fried Rice', 'Basmati Fried Rice is simply Nigerian Style Fried Rice made with Basmati instead of Long Grain Rice. Fried Rice is the second most popular rice dish in Nigeria; A must have at parties and a staple in most homes. It&rsquo;s tagged &ldquo;Nigerian Fried Rice&rdquo; obviously cos there are several variations out there.\r\n\r\n', '1. Place a pot on medium heat and add the vegetable oil. When the oil heats up, add the washed Basmati Rice and fry for 2-3 minutes. Be sure to stir every now and then to prevent burning&hellip;\r\n\r\n2. After frying, add the Chicken Stock, add enough to cook the rice through. Do not add too much liquid, just enough to cover. If you haven&rsquo;t got enough Stock, add water to it. Add the Chopped Onions, Curry Powder, Thyme, Knorr cubes and Salt.\r\n\r\n3. If you added Chicken stock, be very careful when adding Salt and seasoning. Remember your Chicken Stock already contains Salt.\r\n\r\n4. Then cover tightly and leave to cook. Basmati rice needs enough trapped heat to cook. You may wish to cover your pot with foil paper before placing the lid on.\r\n\r\n5. When it&rsquo;s tender but not fully cooked, add the Mixed Vegetables and diced Liver.\r\n\r\n6. Stir and combine. Taste for seasoning and adjust if necessary.\r\n\r\n7. Then add the chopped Spring Onions, stir and combine. Cover tightly, leave to cook till soft. Then add the cooked shrimp/Prawns, cover and cook for 2 minutes.\r\n\r\n8. Then switch the heat off and allow to steam with the residual heat for 3 minutes. Your Basmati Fried Rice is ready.\r\n', '4 Cups Basmati rice,\r\n2 Cooking Spoons Vegetable oil,\r\n4-5 Cups Chicken Stock,\r\n3 Cups Mixed Vegetables (Green peas, Runner beans, Green pepper, Sweetcorn, Carrot),\r\n1 Big Onion, Chopped,\r\n1-2 cups Cooked Shrimp/Prawns,\r\n1 cup Liver, cooked and diced,\r\n1 Cup Chopped Spring Onions,\r\n4 Knorr Chicken Cubes,\r\n1Tablespoon Curry Powder,\r\n1 Tablespoon Dried Thyme,\r\nSalt to Taste.', '17188223431220434251.jpg', '1 hour', 12, 14, '2024-06-19 19:39:03', 'John', 'user', 0, 'Published'),
(57, 'Nigerian Grilled Fish (Grilled Tilapia)', 'Grilled Tilapia is a go-to quick Fish recipe. This recipe is pretty quick and easy but promises to deliver a very lush and delicious taste. The ingredients can be tweaked to suit individual preferences as well.', '1. Preheat your oven to 180 degrees Celsius. Clean and descale your fish thoroughly. Mix all the ingredients together. \r\n\r\n2. Rub half of the marinade on the fish. Then, leave to marinate for at least an hour. Rub more of the marinade on the fish after it&rsquo;s done marinating. \r\n\r\n3. Then place on an oven rack. Place in the oven and grill for 15 minutes on each side or until fully Grilled. Remember to turn the fish over and rub some more marinade on it if necessary.\r\n\r\n4. Your Grilled fish is ready.\r\n\r\n', '1 Medium size Tilapia,\r\n2 Tablespoons Vegetable Oil,\r\n1 Teaspoon Garlic Powder,\r\n1/2 Teaspoon Onion Powder,\r\n1/2 Teaspoon Ginger Powder,\r\n1/4 Teaspoon Cumin Powder,\r\n1 Teaspoon Cayenne Pepper,\r\n1 Knorr Chicken Cube,\r\n1/4 Teaspoon Fish/Chicken Seasoning,\r\nFew Parsely leaves, thinly chopped (optional).', '1718824919150769906.jpg', '30 minutes', 12, 4, '2024-06-19 20:21:59', 'Blessing', 'user', 0, 'Pending'),
(58, 'Boiled Plantain', 'Plantain is one Nigerian food you can never be bored with in the kitchen. It can be eaten unripe, ripe or over-ripe. It can also be fried, boiled/cooked or roasted/grilled.', '1. Wash the plantain and cut each fruit into two or three pieces depending on how big the fruits are.\r\n\r\n2. Put in a pot, add some water and set to cook.\r\n\r\n3. Meanwhile chop the onions and chilli pepper.\r\n\r\n4. Heat some oil (just enough heat to melt it). Pour in a plate and add the chopped onions and chilli pepper. Add salt to taste.\r\n\r\n5. Cook the plantain till done, add some salt to your taste and allow to simmer for a few more minutes. If using ripe plantains, be sure to watch the cooking closely because it will get done quicker than unripe plantains.\r\n\r\n6. The boiled plantain is ready to be served. Remember to remove the peels before eating!', 'Ripe / Unripe Plantain: as many pieces as you can eat!\r\nPalm Oil,\r\nOnions,\r\nHot Chilli Pepper,\r\nSalt (Optional).', '171883016686414902.jpg', '15 minutes', 12, 14, '2024-06-19 21:49:26', 'John', 'user', 0, 'Pending'),
(59, 'Plantain Porridge Recipe', ' Plantain porridge is a Nigerian vegetable stew made with the starchy cousin of common bananas. Plantains are simmered until tender in a flavorful broth along with assorted vegetables and sometimes fish, beans or meat.', ' 1. Put the plantains, onion, dried crawfish or shrimp, broth or water and oil into a large pot and bring to a boil over medium-high flame. Reduce heat to medium low and simmer for 20 to 25 minutes, or until the plantains are nice and soft.\r\n\r\n2. Mash the plantain a little with a potato masher to lightly thicken the stew. Stir in the spinach, ugwu leaf or other greens and salt and pepper to taste. Simmer for another 5 to 10 minutes to cook the greens through.\r\n\r\n3. Adjust seasoning and serve. Popular accompaniments include grilled or fried fish or chicken.', ' Green plantains, cut into 1/4-inch thick rounds 6,\r\nOnion, chopped 1,\r\nGround dried crawfish or dried shrimp -- 1/3 cup,\r\nRed palm oil or vegetable oil -- 3 tablespoons,\r\nBroth or water -- 1 quart,\r\nSpinach, ugu (pumpkin) leaf, spinach or other greens, chopped 1 pound,\r\nSalt and pepper to taste.', '17188416091552434398.jpg', '40 minutes', 12, 4, '2024-06-20 01:00:09', 'Blessing', 'user', 0, 'Pending'),
(63, 'White chocolate cheesecake recipe', 'This creamy white chocolate cheesecake recipe is the ultimate indulgent dessert. With a buttery biscuit base and rich white chocolate, it\\&#039;s guaranteed to impress all of your guests.', '1. Combine the fine biscuit crumbs with the melted butter until you have the consistency of wet sand. Line a 20cm straight-sided springform tart tin with nonstick baking paper. Use the biscuit mixture to line the base of the tin, then transfer to the fridge to set.\r\n\r\n2. Meanwhile, soften the gelatine in the lemon juice and a little water if necessary, for 5 mins. Heat the mixture in a small saucepan over a low heat until the gelatine has dissolved. Place the chopped white chocolate in a heatproof bowl and sit over a saucepan of gently simmering water, stirring occasionally until smooth. Remove to one side to cool a little.\r\n\r\n3. Beat together the low-fat cream cheese and the sugar in a large mixing bowl using an electric hand-held whisk for 2 mins. Add the low-fat Greek yogurt and gelatin mixture, and mix again until smooth. Then fold in the cooled, melted white chocolate. Finally, add the vanilla extract and beat well.\r\n\r\n4. Pour onto the biscuit base and tap gently on the side to release any trapped air bubbles. Transfer to the fridge and chill for 2-3 hours until set. When ready to serve, remove from the tin and remove the nonstick baking paper and cheesecake as one. Garnish the centre of the top of the cheesecake with the grated chocolate and sit the sugar rose on top if using. Cut into portions using a hot, sharp knife.', '120g digestive biscuits, pulsed into fine crumbs,\r\n70g unsalted butter, melted,\r\n2 sheets gelatine,\r\n2tbsp lemon juice,\r\n350g low-fat cream cheese,\r\n100g caster sugar,\r\n200g low-fat Greek yogurt,\r\n150g white chocolate, chopped,\r\n1tbsp vanilla extract,\r\n150g white chocolate, chopped,\r\nsugar rose, to garnish (optional).', '17188850841294584215.jpg', '3hrs 40mins', 17, 14, '2024-06-20 13:04:44', 'John', 'user', 0, 'Pending'),
(64, 'Pineapple daiquiri recipe', 'Switch up your favourite rum cocktail with this fruity frozen twist. Pineapple pairs perfectly with smooth rum for a fresh and zingy evening tipple. You\\&#039;ll need a blender to whizz the frozen fruit into a smooth, icy consistency.', '1. Pour the rum, lime juice, sugar or agave syrup (see tip, below) and frozen pineapple into a high-powered blender and whizz until you have a smooth, icy consistency.\r\n\r\n2. Divide between 2 coupe glasses. Garnish with slices of lime threaded onto cocktail sticks.', '100ml rum,\r\n50ml lime juice (roughly 2-3 juicy limes),\r\n30ml sugar syrup (see tip, below left) or agave syrup,\r\n300g Tesco frozen pineapple chunks,\r\nlime slices.', '1718888096347676857.jpg', '10 mins', 17, 4, '2024-06-20 13:54:56', 'Blessing', 'user', 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_comment` varchar(200) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_comment`, `recipe_id`, `user_id`) VALUES
(4, 'Absolutely amazing dish, really tasty.', 39, 4),
(5, 'Absolutely amazing dish, really tasty.', 39, 4),
(6, 'This is a great recipe, and I\'d like to make ', 48, 4),
(7, 'SO DELISH!', 45, 4),
(8, 'Tried this at home, it is really very tasty.', 42, 14),
(9, 'This is a great recipe, and I\'d like to make ', 43, 14),
(10, 'So quick and full of fresh flavours.', 40, 4),
(11, 'Very tasty, indeed. Followed the instructions', 46, 4),
(18, '\r\nAbsolutely amazing dish, really tasty.', 45, 4),
(19, 'So Delicious!!!', 43, 4),
(20, 'I love recipefinder. I love cooking.', 38, 14),
(21, 'It was okay.', 40, 14),
(23, 'Nice recipe!', 49, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) DEFAULT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_datejoined` datetime DEFAULT current_timestamp(),
  `usertype` enum('user','author') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_password`, `user_datejoined`, `usertype`) VALUES
(4, 'Blessing', 'Adeyinka', 'blessing@gmail.com', '$2y$10$Smf16.9Ka69yNBZTm09AvOkunpH74qyKxRNYtfOFmDV45CAEMwABu', NULL, 'user'),
(14, 'John', 'Osagie', 'johnosagie@gmail.com', '$2y$10$0B0ZQ2HQmFFf4UBjpnUue.yoihDYSejeTA/gOMcCE5TwAHMNjJSrm', '2024-05-27 21:02:01', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `FK5_idx` (`user_id`),
  ADD KEY `FK6_idx` (`recipe_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK7` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK8` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
