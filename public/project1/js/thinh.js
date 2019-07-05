// Chạy json sever: cd C:\xampp\htdocs\project\js> 
// json-server --watch data.json
// angular
var data = {"categorys":[{"id":1,"name":"Pizza","icon":"po po-pizza icon-i-h","link":"pizzas","products":[{"id":1,"name":"Apricot Chicken","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Apricot-Chicken.jpg"},{"pic":"images/Apricot-Chicken1.jpg"},{"pic":"images/Apricot-Chicken1.jpg"}],"description":"Crispy bacon, tasty ham, pineapple, onion and stretchy mozzarella, finished with a BBQ swirl."},{"id":2,"name":"Chicken Hawaii","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Chicken-Hawaii.jpg"},{"pic":"images/Chicken-Hawaii1.jpg"},{"pic":"images/Chicken-Hawaii1.jpg"}],"description":"Extra-virgin olive oil, mozzarella cheese, thinly-sliced steak meat, garlic, green peppers, mushrooms and tomatoes"},{"id":3,"name":"Grand Italiano","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Grand-Italiano.jpg"},{"pic":"images/Grand-Italiano.jpg"},{"pic":"images/Grand-Italiano.jpg"}],"description":"Quisque pretium turpis non tempus cursus. Nulla consequat, mi nec pellentesque imperdiet, mi quam congue magna, tristique commodo."},{"id":4,"name":"Hawaii Vegetarian Pizza","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Hawaii-Vegetarian-Pizza.jpg"},{"pic":"images/Hawaii-Vegetarian-Pizza.jpg"},{"pic":"images/Hawaii-Vegetarian-Pizza.jpg"}],"description":"Mouth watering pepperoni, cabanossi, mushroom, capsicum, black olives and stretchy mozzarella, seasoned with garlic and oregano."},{"id":5,"name":"Italiano Original","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Italiano-Original.jpg"},{"pic":"images/Italiano-Original1.jpg"},{"pic":"images/Italiano-Original1.jpg"}],"description":"Ricotta, sun dried tomatoes, garlic, mozzarella cheese, topped with lightly drizzled red sauce, pesto, and fresh basil"},{"id":6,"name":"Pepperoni Calzone","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Pepperoni-Calzone.jpg"},{"pic":"images/Pepperoni-Calzone1.jpg"},{"pic":"images/Pepperoni-Calzone1.jpg"}],"description":"Piled with shrimp, calamari, clams, mussels, surimi and stretchy mozzarella, seasoned with tangy lemon pepper."},{"id":7,"name":"Pepperoni Pizza","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Pepperoni-Pizza.jpg"},{"pic":"images/Pepperoni-Pizza1.jpg"},{"pic":"images/Pepperoni-Pizza1.jpg"}],"description":"Extra-virgin olive oil, garlic, mozzarella cheese, onions, mushrooms, green olives, black olives, fresh tomatoes."},{"id":8,"name":"Primo Meat","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Primo-Meat.jpg"},{"pic":"images/Primo-Meat1.jpg"},{"pic":"images/Primo-Meat1.jpg"}],"description":"Mouth watering pepperoni, cabanossi, mushroom, capsicum, black olives and stretchy mozzarella."},{"id":9,"name":"Summer Pizza","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Summer-Pizza.jpg"},{"pic":"images/Summer-Pizza1.jpg"},{"pic":"images/Summer-Pizza1.jpg"}],"description":"Shrimp, Red Capsicum, Green Capsicum, Onion, Chilli flakes, Lemon Pepper, Mozzarella, finished with Aioli"},{"id":10,"name":"Supreme Pizza","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Supreme-Pizza.jpg"},{"pic":"images/Supreme-Pizza1.jpg"},{"pic":"images/Supreme-Pizza1.jpg"}],"description":"Ricotta, sun dried tomatoes, garlic, mozzarella cheese, topped with lightly drizzled red sauce, pesto, and fresh basil."},{"id":11,"name":"Trio Cheese","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Trio-Cheese.jpg"},{"pic":"images/Trio-Cheese1.jpg"},{"pic":"images/Trio-Cheese1.jpg"}],"description":"Mouth watering pepperoni, cabanossi, mushroom, capsicum, black olives and stretchy mozzarella."},{"id":12,"name":"Vegge Lover","size":[{"option":22,"unit":"cm"},{"option":29,"unit":"cm"}],"pricesmall":19.99,"pricebig":25.99,"imgUrl":[{"pic":"images/Vegge-Lover.jpg"},{"pic":"images/Vegge-Lover1.jpg"},{"pic":"images/Vegge-Lover1.jpg"}],"description":"Extra-virgin olive oil, garlic, mozzarella cheese, onions, mushrooms, green olives, black olives, fresh tomatoes"}]},{"id":2,"name":"Garlic Breads","icon":"po po-salads icon-i-h","link":"garlic_breads","products":[{"id":1,"name":"Garlic Breads","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Garlic_breads1.jpg"},{"pic":"images/Bolognese-Pasta.jpg"},{"pic":"images/BBQ-chicken-breast.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":2,"name":"Bolognese Pasta","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Garlic_breads2.jpg"},{"pic":"images/Garlic_breads2.jpg"},{"pic":"images/Penne-Funghi-Chicken.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":3,"name":"Molto Tagliatelle","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Garlic_breads3.jpg"},{"pic":"images/Molto-Tagliatelle.jpg"},{"pic":"images/Molto-Tagliatelle.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":4,"name":"Pene Salmone","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Pene-Salmone.jpg"},{"pic":"images/Garlic_breads3.jpg"},{"pic":"images/Pene-Salmone.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":5,"name":"Penne Funghi Chicken","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Penne-Funghi-Chicken.jpg"},{"pic":"images/Spaghetti-Bolognese.jpg"},{"pic":"images/Garlic_breads4.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":6,"name":"Spaghetti Bolognese","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Spaghetti-Bolognese.jpg"},{"pic":"images/Penne-Funghi-Chicken.jpg"},{"pic":"images/Garlic_breads5.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":7,"name":"Tagliatelle Molto","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Tagliatelle-Molto.jpg"},{"pic":"images/Penne-Funghi-Chicken.jpg"},{"pic":"images/Molto-Tagliatelle.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."}]},{"id":3,"name":"Sandwiches","icon":"po po-burger icon-i-h","link":"pizza_sandwiches","products":[{"id":1,"name":"Bacon Burger","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Bacon-Burger.jpg"},{"pic":"images/Bacon-Burger.jpg"},{"pic":"images/Bacon-Burger.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":2,"name":"Cheese Butter","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Cheese-Butter.png"},{"pic":"images/Cheese-Butter1.jpg"},{"pic":"images/Cheese-Butter2.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":3,"name":"Chicken burger","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Chicken-burger.png"},{"pic":"images/Chicken-burger1.jpg"},{"pic":"images/Chicken-burger2.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":4,"name":"Country Burger","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Country-Burger.png"},{"pic":"images/Country-Burger1.jpg"},{"pic":"images/Country-Burger2.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":5,"name":"Double Beef Burger","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Double-Beef-burger.png"},{"pic":"images/Double-Beef-burger1.jpg"},{"pic":"images/Double-Beef-burger2.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":6,"name":"Double Cheese","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Cheese-Butter.png"},{"pic":"images/Cheese-Butter1.jpg"},{"pic":"images/Cheese-Butter2.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":7,"name":"Mushroom Burger","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Mushroom-Burger.png"},{"pic":"images/Cheese-Butter1.jpg"},{"pic":"images/Cheese-Butter1.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":8,"name":"Original Burger","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":19.99,"pricebig":25.9,"imgUrl":[{"pic":"images/Original-Burger.png"},{"pic":"images/Original-Burger.png"},{"pic":"images/Original-Burger.png"}],"description":"A mighty meaty double helping of all the reasons you love our burger."}]},{"id":4,"name":"Desserts","icon":"po po-tacos icon-i-h","link":"desserts","products":[{"id":1,"name":"Chocolate-cake","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Chocolate-cake-1.jpg"},{"pic":"images/Chocolate-cake-2.jpg"},{"pic":"images/Chocolate-cake-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":2,"name":"Chocolate-Muffin","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Chocolate-Muffin-1.jpg"},{"pic":"images/Chocolate-Muffin-2.jpg"},{"pic":"images/Chocolate-Muffin-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":3,"name":"Muffin-Chocolate","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Muffin-Chocolate-1.jpg"},{"pic":"images/Muffin-Chocolate-2.jpg"},{"pic":"images/Muffin-Chocolate-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":4,"name":"Red-Chocolate-Cake","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Red-Chocolate-Cake-1.jpg"},{"pic":"images/Red-Chocolate-Cake-2.jpg"},{"pic":"images/Red-Chocolate-Cake-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":5,"name":"Red-Velvet-Cake","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Red-Velvet-Cake-1.jpg"},{"pic":"images/Red-Velvet-Cake-2.jpg"},{"pic":"images/Red-Velvet-Cake-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":6,"name":"Strawberry-Shake","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Strawberry-Shake.jpg"},{"pic":"images/Strawberry-Shake.jpg"},{"pic":"images/Strawberry-Shake.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":7,"name":"Stawberry-Ice","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Stawberry-Ice-1.jpg"},{"pic":"images/Stawberry-Ice-2.jpg"},{"pic":"images/Stawberry-Ice-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":8,"name":"Blueberry-Shake","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Blueberry-Shake-1.jpg"},{"pic":"images/Blueberry-Shake-2.jpg"},{"pic":"images/Blueberry-Shake-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."}]},{"id":5,"name":"Beverages","icon":"po po-drinks icon-i-h","link":"beverages","products":[{"id":1,"name":"Cola-Bottle","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Cola-Bottle-1.jpg"},{"pic":"images/Cola-Bottle-2.jpg"},{"pic":"images/Cola-Bottle-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":2,"name":"Fresh-Lime","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Fresh-Lime-1.jpg"},{"pic":"images/Fresh-Lime-2.jpg"},{"pic":"images/Fresh-Lime-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":3,"name":"Ice-Lime-Cola","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Ice-Lime-Cola-1.jpg"},{"pic":"images/Ice-Lime-Cola-2.jpg"},{"pic":"images/Ice-Lime-Cola-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":4,"name":"Iced-Tea","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Iced-Tea-1.jpg"},{"pic":"images/Iced-Tea-2.jpg"},{"pic":"images/Iced-Tea-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":5,"name":"Iced-Tea-Bottle","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Iced-Tea-Bottle-1.jpg"},{"pic":"images/Iced-Tea-Bottle-2.jpg"},{"pic":"images/Iced-Tea-Bottle-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":6,"name":"Kiwi-Smoothie","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Kiwi-Smoothie-1.jpg"},{"pic":"images/Kiwi-Smoothie-2.jpg"},{"pic":"images/Kiwi-Smoothie-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":7,"name":"Lemonades-Drink","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Lemonades-Drink-1.jpg"},{"pic":"images/Lemonades-Drink-2.jpg"},{"pic":"images/Lemonades-Drink-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":8,"name":"Orange-Juice","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Orange-Juice-1.jpg"},{"pic":"images/Orange-Juice-2.jpg"},{"pic":"images/Orange-Juice-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":9,"name":"Strawberry-Tea","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Strawberry-Tea.jpg"},{"pic":"images/Strawberry-Tea.jpg"},{"pic":"images/Strawberry-Tea.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":10,"name":"Trio-Cafe","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Trio-Cafe.jpg"},{"pic":"images/Trio-Cafe.jpg"},{"pic":"images/Trio-Cafe.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":11,"name":"Tropicana Juice","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Tropicana-Juice.jpg"},{"pic":"images/Tropicana-Juice.jpg"},{"pic":"images/Tropicana-Juice.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":12,"name":"Water Bottle","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":2.9,"imgUrl":[{"pic":"images/Water-Bottle.jpg"},{"pic":"images/Water-Bottle.jpg"},{"pic":"images/Water-Bottle.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":13,"name":"Black Coffee","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Black-Coffee-1.jpg"},{"pic":"images/Black-Coffee-2.jpg"},{"pic":"images/Black-Coffee-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":14,"name":"Hot Cappuccino","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Hot-Cappuccino-1.jpg"},{"pic":"images/Hot-Cappuccino-2.jpg"},{"pic":"images/Hot-Cappuccino-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":15,"name":"Iced Coffee","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Iced-Coffee-1.jpg"},{"pic":"images/Iced-Coffee-2.jpg"},{"pic":"images/Iced-Coffee-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":16,"name":"Pizzaro Coffee","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Pizzaro-Coffee-1.jpg"},{"pic":"images/Pizzaro-Coffee-2.jpg"},{"pic":"images/Pizzaro-Coffee-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":17,"name":"Plain Tea","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Plain-Tea-1.jpg"},{"pic":"images/Plain-Tea-2.jpg"},{"pic":"images/Plain-Tea-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."}]}],"combo_ofers":[{"id":1,"name":"BIG STAR COMBO","price1":"£19.90","imgUrl":"Images/BIG-STAR-COMBO.png"},{"id":2,"name":"BIG STAR COMBO","price1":"£19.90","price2":"£25.90","imgUrl":"images/BIG-STAR-COMBO.png"},{"id":3,"name":"BURGER-CHICKEN-RICE-COMBO","price1":"£19.90","price2":"£25.90","imgUrl":"images/BURGER-CHICKEN-RICE-COMBO.png"},{"id":4,"name":"BURGER COCONUT COMB","price1":"£19.90","price2":"£25.90","imgUrl":"images/BURGER-COCONUT-COMB.png"},{"id":5,"name":"BURGER FISH COMBO","price1":"£19.90","price2":"£25.90","imgUrl":"images/BURGER-FISH-COMBO.png"},{"id":6,"name":"BURGER-PHO MAI COMBO","price1":"£19.90","price2":"£25.90","imgUrl":"images/BURGER-PHO-MAI-COMBO.png"},{"id":7,"name":"BURGER TOM COMBO","price1":"£19.90","price2":"£25.90","imgUrl":"images/BURGER-TOM-COMBO.png"},{"id":8,"name":"FAMILY SET 1","price1":"£19.90","price2":"£25.90","imgUrl":"images/FAMILY-SET-1.png"},{"id":9,"name":"FAMILY SET 2","price1":"£19.90","price2":"£25.90","imgUrl":"images/FAMILY-SET-2.png"}],"best_deals":[{"id":1,"name":"Black Coffee","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Black-Coffee-1.jpg"},{"pic":"images/Black-Coffee-2.jpg"},{"pic":"images/Black-Coffee-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":2,"name":"Hot Cappuccino","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Hot-Cappuccino-1.jpg"},{"pic":"images/Hot-Cappuccino-2.jpg"},{"pic":"images/Hot-Cappuccino-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":3,"name":"Iced Coffee","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Iced-Coffee-1.jpg"},{"pic":"images/Iced-Coffee-2.jpg"},{"pic":"images/Iced-Coffee-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":4,"name":"Pizzaro Coffee","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Pizzaro-Coffee-1.jpg"},{"pic":"images/Pizzaro-Coffee-2.jpg"},{"pic":"images/Pizzaro-Coffee-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."},{"id":5,"name":"Plain Tea","size":[{"option":"Small","unit":"size"},{"option":"Big","unit":"size"}],"pricesmall":1.5,"pricebig":25.9,"imgUrl":[{"pic":"images/Plain-Tea-1.jpg"},{"pic":"images/Plain-Tea-2.jpg"},{"pic":"images/Plain-Tea-3.jpg"}],"description":"A mighty meaty double helping of all the reasons you love our burger."}]}



var shopApp = angular.module("shopApp",["ui.bootstrap","ngRoute","ngAnimate"]);
shopApp.run(function($rootScope){
    $rootScope.categorys = data.categorys;
    $rootScope.combo_ofers = data.combo_ofers;
    $rootScope.best_deals = data.best_deals;
})
// Sử dụng directive thêm vào các trang
// shopApp.directive('ngHeaderPage',function(){
// 	return {
// 		restrict: 'AE',
// 		templateUrl:'block/header-page.htm',
// 	}
// });
// shopApp.directive('ngScrollupButton',function(){
// 	return {
// 		restrict: 'AE',
// 		templateUrl:'block/scrollup-button.htm',
// 	}
// });
// shopApp.directive('ngFooterPage',function(){
// 	return {
// 		restrict: 'AE',
// 		templateUrl:'block/footer-page.htm',
// 	}
// });

// Cấu hình các đường link bằng routeProvider
// shopApp.config(['$routeProvider',function($routeProvider) {
//     $routeProvider
//     .when("/", {
//         templateUrl : "block/home-page.htm",
//         controller: "shopController"
//     })
//     .when("/category/:linkcategory",{
//         templateUrl: "block/list-product.htm",
//         controller: "listController"
//     })
//     .when("/product/:linkcategory/:linkproduct",{
//         templateUrl: "block/single-product.htm",
//         controller: "productController"
//     })
//     .when("/franchise",{
//         templateUrl: "block/franchise.htm",
//         controller: "franchiseController"
//     })
//     .when("/combo",{
//         templateUrl: "block/combo-offers-page.htm",
//         controller: "comboController"
//     })
//     .when("/weekendspecial",{
//         templateUrl: "block/weekendspecial.htm",
//         controller: "weekenspecialController"
//     })
//     .when("/galary",{
//         templateUrl: "block/galary.htm",
//         controller: "galaryController"
//     })
//     .when("/contact",{
//         templateUrl: "block/contactus.htm",
//         controller: "contactController"
//     })
//     .when("/storelocation",{
//         templateUrl: "block/store-location.htm",
//         controller: "storelocationController"
//     })
//     .otherwise({ redirectTo: '/' });
// }]);
// Dùng controller đề điều khiển các block
shopApp.controller("shopController", function($rootScope,$scope,$location,$routeParams){

    // Khai báo linkcategory
    $routeParams.linkcategory="pizzas";
    $scope.linkcategory = $routeParams.linkcategory;
    console.log($routeParams.linkcategory);
    // jquery của scrollup
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup-t').fadeIn();
            } else {
                $('.scrollup-t').fadeOut();
            }
        });
    
        $('.scrollup-t').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });
    // Binding data in home page
    if(typeof $routeParams.linkcategory !== "undefined"){
		angular.forEach($rootScope.categorys,function(category){
			if(category.link == $routeParams.linkcategory){
                $scope.products = category.products;
                $scope.nameCategory = category.name;
			};		
		});
    };
    $scope.changecategory = function(element,item){
        $routeParams.linkcategory=item.link;
        $scope.linkcategory = $routeParams.linkcategory;
        if(typeof $routeParams.linkcategory !== "undefined"){
            angular.forEach($rootScope.categorys,function(category){
                if(category.link == $routeParams.linkcategory){
                    $scope.products = category.products;
                    $scope.nameCategory = category.name;
                };		
            });
        };
        $("li[ng-click|='changecategory($event,c)']").css("font-weight","normal");
        $("li[ng-click|='changecategory($event,c)']").css("text-shadow","none");
        $("li[ng-click|='changecategory($event,c)']").children().children().css("font-weight","normal");
        $("li[ng-click|='changecategory($event,c)']").children().children().css("color","rgba(255, 255, 255, 0.692)");
        $(element.currentTarget).css("font-weight","bolder");
        $(element.currentTarget).css("text-shadow","#000c 2px 3px");
        $(element.currentTarget).children().children().css("font-weight","900");
        $(element.currentTarget).children().children().css("color","white");




    };
    $scope.countupitem = 0
    
    $scope.choicedrinkitem = function(){
        if($scope.nextitemdrink>1){
            $scope.nextitemdrink = $scope.nextitemdrink-1;
        };
    }
    $scope.choicedrinkitemnext = function(){
        if($scope.nextitemdrink<3){
            $scope.nextitemdrink = $scope.nextitemdrink+1;
        };
    }
    $scope.choiceitem = function(){
        if($scope.countupitem>1){
            $scope.countupitem = $scope.countupitem-1;
        };
    }
    $scope.choiceitemnext = function(){
        if($scope.countupitem<$scope.products.length-3){
            $scope.countupitem = $scope.countupitem+1;
        };
    }
});
shopApp.controller("listController", function($location,$rootScope,$scope,$routeParams){
    // Chọn loại category để khai báo biến products
    // $scope.linkcategory = $routeParams.linkcategory;
    // console.log( $routeParams.linkcategory);
    $scope.changecategorylistpage = function(){
        console.log($location.path().split('/')[1]);
        if(typeof $location.path().split('/')[1] !== "undefined"){
            angular.forEach($rootScope.categorys,function(category){
                if(category.link == $location.path().split('/')[1]){
                    $scope.products = category.products;
                    $scope.nameCategory = category.name;
                    $scope.linkcategory = $location.path().split('/')[1];
                    // Funtion cho phân trang
                    $scope.viewby = 10;
                    $scope.totalItems = $scope.products.length;
                    $scope.currentPage = 1;
                    $scope.itemsPerPage = 9;
                    $scope.maxSize = 5; //Number of pager buttons to show
                    $scope.pageChanged = function() {
                        console.log('Page changed to: ' + $scope.currentPage);
                    };
                };		
            });
        };
    };
    console.log($location.path().split('/')[0]);
    if($location.path().split('/')[0] !== "list-product.html#!"){
        if(typeof $location.path().split('/')[1] !== "undefined"){
            angular.forEach($rootScope.categorys,function(category){
                if(category.link == $location.path().split('/')[1]){
                    $scope.products = category.products;
                    $scope.nameCategory = category.name;
                    $scope.linkcategory = $location.path().split('/')[1];
                    // Funtion cho phân trang
                    $scope.viewby = 10;
                    $scope.totalItems = $scope.products.length;
                    $scope.currentPage = 1;
                    $scope.itemsPerPage = 9;
                    $scope.maxSize = 5; //Number of pager buttons to show
                    $scope.pageChanged = function() {
                        console.log('Page changed to: ' + $scope.currentPage);
                    };
                };		
            });
        };
    };

    // Binding data in home page
    $scope.changecategory = function(item){
        $routeParams.linkcategory=item.link;
        $scope.linkcategory = $routeParams.linkcategory;
        if(typeof $routeParams.linkcategory !== "undefined"){
            angular.forEach($rootScope.categorys,function(category){
                if(category.link == $routeParams.linkcategory){
                    $scope.products = category.products;
                    $scope.nameCategory = category.name;
                    // Funtion cho phân trang
                    $scope.viewby = 10;
                    $scope.totalItems = $scope.products.length;
                    $scope.currentPage = 1;
                    $scope.itemsPerPage = 9;
                    $scope.maxSize = 5; //Number of pager buttons to show
                    $scope.pageChanged = function() {
                      console.log('Page changed to: ' + $scope.currentPage);
                    };
                };		
            });
        };
    };
    // Funtion chọn trang thì scrollup lên đầu
    $scope.scrollupChoosePage = function(){
        $("html, body").animate({
            scrollTop: 100
        }, 600);
    }

});
shopApp.controller("productController", function($rootScope,$scope,$routeParams,$location,$http){
    // Chọn product từ 
    $scope.linkcategory = $location.path().split('/')[1];

    $scope.linkproduct = $location.path().split('/')[2];

    if(typeof $location.path().split('/')[1] !== "undefined"){
        if(typeof $location.path().split('/')[2] !== "undefined"){
            angular.forEach($rootScope.categorys,function(category){
                if(category.link == $location.path().split('/')[1]){
                    $scope.products = category.products;
                    $scope.nameCategory = category.name;
                    angular.forEach($scope.products,function(product){
                        if(product.id == $location.path().split('/')[2]){
                            $scope.product = product;
                        };		
                    });        
                };		
            });
        };
    };
    // jquery của trang single-products
    $(document).ready(function(){
        $('#img-zoom-t').zoom();
    });
    // Chọn ảnh sản phẩm
    $scope.imageInit = $scope.product.imgUrl[0].pic;
    $scope.getImage0 = function(){
        $scope.imageInit = $scope.product.imgUrl[0].pic;
        $(document).ready(function(){
            $('#img-zoom-t').zoom();
        });
    };
    $scope.getImage1 = function(){
        $scope.imageInit = $scope.product.imgUrl[1].pic;
        $(document).ready(function(){
            $('#img-zoom-t').zoom();
        });
    };
    $scope.getImage2 = function(){
        $scope.imageInit = $scope.product.imgUrl[2].pic;
        $(document).ready(function(){
            $('#img-zoom-t').zoom();
        });
    };
    // post review email
    $scope.submitreviewproduct = function(){
		$http({
			method: 'POST',
			url: 'http://localhost/project/js/review.json',
            data: $.param({
                    email_reviewer: $scope.review.email, 
                    needreply: $scope.review.reply, 
                    reviewtext: $scope.review.text, 
                    product_reviewer: $scope.product.name
            }),
            contentType: "application/json",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		})
			.then(function (response) {
                alert("Send review done!");
                console.log($scope.review.email,$scope.review.reply,$scope.review.text,$scope.product.name);
			});
    }
    // Tính tiền của sản phẩm
    $scope.showSizeOption = true;
    $scope.quantitySelectItem = 1;
    $scope.priceofproduct=$scope.product.pricebig;
    $scope.choicesmallproduct = function(){
        $scope.showSizeOption=false;
        $scope.priceofproduct=$scope.product.pricesmall;
    }
    $scope.choicebigproduct = function(){
        $scope.showSizeOption=true;
        $scope.priceofproduct=$scope.product.pricebig;
    }
});
shopApp.controller("franchiseController", function($rootScope,$scope,$location){
});
shopApp.controller("combocontroller", function($rootScope,$scope,$location){
});
shopApp.controller("weekenspecialController", function($rootScope,$scope,$location){
});
shopApp.controller("galaryController", function($rootScope,$scope,$location){
});
shopApp.controller("contactController", function($rootScope,$scope,$location){
    var x = $("#my-location");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            $("#my-location").html("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        $("#my-location").html("Kinh độ: " + position.coords.latitude + 
        "<br>Vĩ độ: " + position.coords.longitude);
    }

    $(document).ready(getLocation);
});
shopApp.controller("storelocationController", function($rootScope,$scope){
    function storelocation(){
        $('.li-first-h').click(function(){
            if ($('#hn-h').hasClass('none-h')) {
                $('#k-h').addClass('none-h');
                $('#hcm-h').addClass('none-h');
                $('#hn-h').removeClass('none-h');
                $('.li-menu').css("background",'');
                $('.li-first-h').css("background",'red');
            }
            else{
                
                $('#k-h').addClass('none-h');
                $('#hcm').addClass('none-h');
                $('#hn-h').addClass('none-h');
                $('.li-first-h').css("background",'');
            }
    
            
        });
        $('.li-no2').click(function(){
            if ($('#hcm-h').hasClass('none-h')) {
                $('#k-h').addClass('none-h');
                $('#hn-h').addClass('none-h');
                $('.li-menu').css("background",'');
                $('#hcm-h').removeClass('none-h');
                $('.li-no2').css("background",'red');
    
            }
            else{
                $('#k-h').addClass('none-h');
                $('#hn-h').addClass('none-h');
                $('.li-no2').css("background",'');
                $('#hcm-h').addClass('none-h');
            }
    
        });
    
        $('.li-no3').click(function(){
            if ($('#k-h').hasClass('none-h')) {
                $('#hcm-h').addClass('none-h');
                $('#hn-h').addClass('none-h');
                $('.li-menu').css("background",'');
                $('.li-no3').css("background",'red');
                $('#k-h').removeClass('none-h');
            }
            else{
                $('#hcm-h').addClass('none-h');
                $('#hn-h').addClass('none-h');
                $('.li-no3').css("background",'');
                $('#k-h').addClass('none-h');
            }
    
        });
        $('a').click(function(){
            // $('a').attr('title','Học Web Chuẩn');
            if($(this).attr('href').length == 4){
                var a=$(this).attr('href');
                $(".map").each(function(){
                    var m=$(this).attr("id");
                    if (m==a) {
                        $('.map').hide(300);
                        $(this).show(300);
                    }
                }); 
                return false;
            };
        });
        
    };
    storelocation();

});
// jquery
$('.carousel').carousel({
    interval: 3000
});
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup-t').fadeIn();
        } else {
            $('.scrollup-t').fadeOut();
        }
    });

    $('.scrollup-t').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
// jquery trang store location


