let iconCart = document.querySelector('.iconCart');
let closeCart = document.querySelector('.close');
let body = document.querySelector('body');
let listProductHTML = document.querySelector('.listProduct');
let listCartHTML = document.querySelector('.listCart');
let iconCartSpan = document.querySelector('.iconCart span');

let listProducts = [];
let carts = []; //to store the cart value

iconCart.addEventListener('click', () =>{
    body.classList.toggle('showCart')
})

closeCart.addEventListener('click', () => { //jadi kalo dia klik button close, nanti cartTab nya nutup
    body.classList.toggle('showCart')
})

const addDataToHTML = () => {
    // console.log('Adding data to HTML...');
    // console.log('listProducts:', listProducts);
    // console.log('listProductHTML:', listProductHTML);
    listProductHTML.innerHTML = '';
    if(listProducts.length > 0){
        
        listProducts.forEach(product => {
            // console.log('Image URL:', product.image);
            // console.log('product:', product);
            let newProduct = document.createElement('div');
            newProduct.classList.add('item');
            newProduct.dataset.id = product.id;
            newProduct.innerHTML = `
                <img src="${product.image}" alt="" width="180" height="180">
                <h2>${product.name}</h2>
                <div class="price">${product.price}K</div>
                <button class="addCart">
                    Add To Cart
                </button>
                `;
                listProductHTML.appendChild(newProduct);
        })
    }
}

listProductHTML.addEventListener('click', (Event) => { //ini supaya klo di klik di "listProduct" nanti cart nya nambah
    let positionClick = Event.target;
    if(positionClick.classList.contains('addCart')){
        let productId = positionClick.parentElement.dataset.id;
        addToCart(productId); 
    }
})

const addToCart = (productId) => {
    let positionThisProductInCart = carts.findIndex((value) => value.productId == productId); //buat nyari ada ga di cart nya, kalo ga ada, nanti return -1
    if(carts.length <= 0){ //ini kalo keranjangnya kosong
        carts = [{
            productId : productId,
            quantity : 1
        }]
    }else if(positionThisProductInCart < 0){ //kalo produknya gaada di cart / search position less than zero, maka di push buat add productId nya
        carts.push({
            productId : productId,
            quantity : 1
        })
    }else{ //ini buat kalo udah ada produknya di cart
        carts[positionThisProductInCart].quantity = carts[positionThisProductInCart].quantity + 1;
    }

    addCartToHTML();
    addCartToMemory();
}

const addCartToMemory = () => {
    localStorage.setItem('cart', JSON.stringify(carts)); //with the setItem function, it will save the value of the shopping cart to local storage, however, local storage doesnt allow storing values as array, therefore, the cart array is converted into json to save
}
const addCartToHTML = () => {
    listCartHTML.innerHTML = '';
    let totalQuantity = 0; //variable buat update total number of products in the shopping cart yang "span 0 span" itu
    if(carts.length > 0){ //if the number of product in the shopping cart is greater than zero use forEach to get the cart list 
        carts.forEach(cart => {
            totalQuantity = totalQuantity + cart.quantity;
            let newCart = document.createElement('div'); //for each shopping cart, i create a component with class "item"
            newCart.classList.add('item');
            newCart.dataset.id = cart.productId;
            let positionProduct = listProducts.findIndex((value) => value.id == cart.productId); //buat nyocokin product yang dipilih sama product yang ada di cartTab, jadi ga cuma "span" angka dari product yang dipilih aja yg nambah, tapi nama sama harga barang yang dipilih jg keliatan
            let info = listProducts[positionProduct];
            newCart.innerHTML = `
            <div class="images">
                <img src="${info.image}" alt="" width="40" height="40">
                </div>
                <div class="name">${info.name}</div>
                <div class="totalPrice">
                ${info.price * cart.quantity}K
                </div>
                <div class="quantity">
                    <span class="minus"><</span>
                    <span>${cart.quantity}</span>
                    <span class="plus">></span>
                </div>
            `;
            listCartHTML.appendChild(newCart); // then add it to list cart with appendChild
        })
    } 
    iconCartSpan.innerText = totalQuantity;
}

listCartHTML.addEventListener('click', (event) => {
    let positionClick = event.target;
    if(positionClick.classList.contains('minus') || positionClick.classList.contains('plus')){ //ini berati user klik tanda panah di samping quantity
        let productId = positionClick.parentElement.parentElement.dataset.id; //manggil parentElement 2 kali buat dapetin dataset-id information soalnya katanya ada di dalem 2 class, yaitu didalem class "btn" sama didalem class "item"
        let type = 'minus';
        if(positionClick.classList.contains('plus')){
            type = 'plus'; //if the button clicked as a plus button then the type will be plus
        }
        changeQuantity(productId, type);
    }
})

const changeQuantity = (productId, type) => {
    let positionItemCart = carts.findIndex((value) => value.productId == productId);
    if (positionItemCart >= 0){
        switch (type) {
            case 'plus': //if type has value plus, we just need to add the quantity to the product at that position
                carts[positionItemCart].quantity = carts[positionItemCart].quantity + 1;
                break;
        
            default: //if it minus, then we need to check to see what the result is after subtracting one 
                let valueChange = carts[positionItemCart].quantity - 1;
                if (valueChange > 0){ // if its greater than zero, we just subtract as usual 
                    carts[positionItemCart].quantity = valueChange;
                }else{
                    carts.splice(positionItemCart, 1); //if the quantity is zero, then we will have to delete that product from the cart with the "splice" function
                }
                break;
        }
    }
    addCartToMemory(); //add this function again so that it updates the latest data into memory
    addCartToHTML(); //also add this function to refresh the data on the screen
}

const initApp = () => {
    //get data from json
    fetch('/assets/js/product.json')
    .then(Response => Response.json())
    .then(data => {
        listProducts = data;
        addDataToHTML();

        //get cart from memory

        if(localStorage.getItem('cart')){ 
            carts = JSON.parse(localStorage.getItem('cart')); //if we wanna use it, we have to convert from json to an array with the JSON parse function because the cart array is converted into json before 
            addCartToHTML(); //run this function to put the data on the screen
        }
    })
    // .catch(error => console.error('Error fetching products:', error));
}
initApp();

