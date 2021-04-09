let checkbox_consoles = document.getElementById("consoles");
let checkbox_electronics = document.getElementById("electronics");
let checkbox_furniture = document.getElementById("furniture");
let checkbox_games = document.getElementById("games");
let checkbox_miscellaneous = document.getElementById("miscellaneous");
let list_of_products = document.getElementsByTagName("li");

var checkboxArray = [
    checkbox_consoles,
    checkbox_electronics,
    checkbox_furniture,
    checkbox_games,
    checkbox_miscellaneous
];

var categoriesArray = ["consoles", "electronics", "furniture", "games", "miscellaneous"];

for(let i=0; i<checkboxArray.length; i++){
    checkboxArray[i].checked = true;
}

/************************************** */
function filterFunction(j) {
    if(checkboxArray[j].checked){
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === categoriesArray[j]){
                list_of_products[i].style.display = '';
            }
        }
    }else{
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === categoriesArray[j]){
                list_of_products[i].style.display = 'none';
            }
        }
    }
}
/************************************** */


checkboxArray[0].addEventListener('change', function(){filterFunction(0);});
checkboxArray[1].addEventListener('change', function(){filterFunction(1);});
checkboxArray[2].addEventListener('change', function(){filterFunction(2);});
checkboxArray[3].addEventListener('change', function(){filterFunction(3);});
checkboxArray[4].addEventListener('change', function(){filterFunction(4);});


/*
checkbox_consoles.addEventListener('change', function(){
    if(checkbox_consoles.checked){
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === 'consoles'){
                list_of_products[i].style.display = '';
            }
        }
    }else{
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === 'consoles'){
                list_of_products[i].style.display = 'none';
            }
        }
    }
});

checkbox_electronics.addEventListener('change', function(){
    if(checkbox_electronics.checked){
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === 'electronics'){
                list_of_products[i].style.display = '';
            }
        }
    }else{
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === 'electronics'){
                list_of_products[i].style.display = 'none';
            }
        }
    }
});*/







/*
checkbox_consoles.addEventListener('change', function(){filterFunction(checkbox_consoles, 0);});
checkbox_electronics.addEventListener('change', function(){filterFunction(checkbox_electronics, 1);});
checkbox_furniture.addEventListener('change', function(){filterFunction(checkbox_furniture, 2);});
checkbox_games.addEventListener('change', function(){filterFunction(checkbox_games, 3);});
checkbox_miscellaneous.addEventListener('change', function(){filterFunction(checkbox_miscellaneous, 4);});
*/