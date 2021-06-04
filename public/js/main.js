let checkbox_consoles = document.getElementById("consoles");
let checkbox_electronics = document.getElementById("electronics");
let checkbox_furniture = document.getElementById("furniture");
let checkbox_games = document.getElementById("games");
let checkbox_miscellaneous = document.getElementById("miscellaneous");
let list_of_products = document.getElementsByTagName("li");
let search_bar = document.getElementById("homepage__searchbar__id");

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

/**************Filter function******** */
function filterFunction(j) {
    console.log(list_of_products[4].dataset.category);

    if (checkboxArray[j].checked){
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === categoriesArray[j]){
                list_of_products[i].style.display = '';
            }
        }
    } else{
        for(let i=0; i<list_of_products.length; i++){
            if(list_of_products[i].dataset.category === categoriesArray[j]){
                list_of_products[i].style.display = 'none';
            }
        }
    }
}

checkboxArray[0].addEventListener('change', function(){filterFunction(0);});
checkboxArray[1].addEventListener('change', function(){filterFunction(1);});
checkboxArray[2].addEventListener('change', function(){filterFunction(2);});
checkboxArray[3].addEventListener('change', function(){filterFunction(3);});
checkboxArray[4].addEventListener('change', function(){filterFunction(4);});

/**************Search function******** */
search_bar.oninput = function(event){
    /* Clear all items first */
    for(let i=4; i<list_of_products.length; i++)
        list_of_products[i].style.display = 'none';
      
    for(let i=4; i<list_of_products.length; i++){
        console.log(search_bar.value);
        console.log(list_of_products[i].dataset.name);
        if (list_of_products[i].dataset.name.toLowerCase().includes(search_bar.value)){
            list_of_products[i].style.display = '';
        }
    }   
}