let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Burger',
        image: '1.jpg',
        price: 750
    },
    {
        id: 2,
        name: 'Milkshake',
        image: '2.jpg',
        price: 350
    },
    {
        id: 3,
        name: 'Pizza',
        image: '3.png',
        price: 2400
    },
    {
        id: 4,
        name: 'Onion Rings ',
        image: '4.jpg',
        price: 300
    },
    {
        id: 5,
        name: 'Biriyani',
        image: '5.webp',
        price: 1200
    },
    {
        id: 6,
        name: 'Potato Chips',
        image: '6.jpg',
        price: 600
    },
    {
        id: 7,
        name: 'Lasagna',
        image: '7.webp',
        price: 1400
    },
    {
        id: 8,
        name: 'Ice-Cream',
        image: '8.jpg',
        price: 300
    },
    {
        id: 9,
        name: 'Chocolate',
        image: '9.jpg',
        price: 500
    },
    {
        id: 10,
        name: 'Pasta',
        image: '10.jpg',
        price: 650
    },
    {
        id: 11,
        name: 'Starbucks',
        image: '11.jpg',
        price: 440
    },
    {
        id: 12,
        name: 'Hot Dog',
        image: '12.jpg',
        price: 300
    },
    {
        id: 13,
        name: 'Sandwich',
        image: '13.jpg',
        price: 250
    },
    {
        id: 14,
        name: 'Muffin',
        image: '14.jpg',
        price: 100
    },
    {
        id: 15,
        name: 'Sausage',
        image: '15.jpg',
        price: 180
    },
    {
        id: 16,
        name: 'Cake',
        image: '16.jpg',
        price: 780
    },
    {
        id: 17,
        name: 'Burrito',
        image: '17.jpg',
        price: 240
    },
    {
        id: 18,
        name: 'Bacon',
        image: '18.webp',
        price: 320
    },
    {
        id: 19,
        name: 'Donats',
        image: '19.jpg',
        price: 160
    },
    {
        id: 20,
        name: 'Noodles',
        image: '20.jpg',
        price: 450
    },
    {
        id: 21,
        name: 'Pancake',
        image: '21.jpg',
        price: 150
    },
    {
        id: 22,
        name: 'Pretzel',
        image: '22.jpg',
        price: 100
    },
    {
        id: 23,
        name: 'Taco',
        image: '23.jpg',
        price: 250
    },
    {
        id: 24,
        name: 'Koththu',
        image: '24.jpg',
        price: 1200
    }

];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image1/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image1/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}