<?php
$def= array(
	'pub_theme' => 'gbfood',
	//'adm_theme' => 'adminlte',
	'adm_theme' => 'sb-admin-2-bs4',
	'enable_ads' => '1',
	'model' => array(
		'blog' 				=>		'Modules\Blog\Models\Blog',
		'article' 			=>		'Modules\Blog\Models\Article',
		'article_cat' 		=> 		'Modules\Blog\Models\ArticleCat',
		'photo' 			=> 		'Modules\Blog\Models\Photo',
		'home' 				=> 		'Modules\Blog\Models\Home',
		'page' 				=> 		'Modules\Blog\Models\Page',
		'feed' 				=> 		'Modules\Blog\Models\Feed',
		'sitemap' 			=> 		'Modules\Blog\Models\Sitemap',
		'place' 			=> 		'Modules\Blog\Models\Place',
		'event' 			=> 		'Modules\Blog\Models\Event',
		'rating'			=>		'Modules\Blog\Models\Rating',
		'my_rating'			=>		'Modules\Blog\Models\MyRating',
		'privacy'			=>		'Modules\Blog\Models\Privacy',
		//------------- Extend --------------------------------------
		'translation'		=>		'Modules\Extend\Models\Translation',
		'image'				=>		'Modules\Extend\Models\Image',
		//------------- FOOD ----------------------------------------

		'restaurant' 		=> 		'Modules\Food\Models\Restaurant',
		'restaurant_owner' 	=> 		'Modules\Food\Models\RestaurantOwner',
		'recipe' 			=> 		'Modules\Food\Models\Recipe',
		'cuisine' 			=> 		'Modules\Food\Models\Cuisine',
		'cuisine_cat' 		=> 		'Modules\Food\Models\CuisineCat',
		'ingredient' 		=> 		'Modules\Food\Models\Ingredient',
		'ingredient_cat' 	=> 		'Modules\Food\Models\IngredientCat',
		'location' 			=> 		'Modules\Food\Models\Location',
		'profile' 			=> 		'Modules\Food\Models\Profile',

		'cart_item'			=> 		\Modules\Food\Models\CartItem::class, //wip 
		'cart'				=> 		\Modules\Food\Models\Cart::class, //wip 
		'opening_hour' 		=> 		\Modules\Food\Models\OpeningHour::class,
		//'map' =>          		\Modules\Food\Models\Map::class,
		'restaurant_map'	=>      \Modules\Food\Models\RestaurantMap::class,
		//'contact'			=>     	\Modules\Food\Models\Contact::class,
		'bell_boy'			=> 		\Modules\Food\Models\BellBoy::class,

	),
	'roots'=>[
		'restaurant',
		'profile',
		//'cuisineCat',
	],
	'migrate_packs' => array(
		'xra',
		'blog',
		'lu',
		'import',
		'food',
		'seo',
		'backend',
	),
	'enable_packs' => array(
		'frontend',
		'backend',
		'lu',
		'blog',
		'extend',
		'import',
		'food',
	  //  'seo',
		'xra',
		'settings',
	),
	'primary_lang' => 'it',
	'related' => array(
	   'postCat' => array(
		   0 => 'post',
	   ),
	   'cuisine' => array(
		   0 => 'ingredientCat',
		   1 => 'recipe',
	   ),
	   'ingredientCat' => array(
		   0 => 'ingredient',
	   ),
	   'restaurant' => array(
		   0 => 'cuisine',
		   1 => 'cuisineCat',
	   ),
	   'home'=>[
	   ],
   ),
);


return $def;