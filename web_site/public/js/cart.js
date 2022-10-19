let current_cart = {
    count:0,
    products:[]
};

function display_cart_logo() {
    const div = document.querySelector("#cart_logo").innerHTML="🛒 Cart ("+ current_cart.count+")";
}


//quantity+
function addQuantity() {
    let quantity =localStorage.getItem("quantity");
    
    quantity++;
    localStorage.setItem("quantity", quantity);
}

//buy-----------------------------------------------------------------
let total=0;
function buy(id,image,name,description,stock,price) {
    let was_found=false;
    const a = parseFloat(price);
   current_cart.products.forEach((product) => {
       if (product.id === id) {
           product.price = Number(product.price);
           product.quantity++;
           was_found =true;
       }
   });
   if (!was_found){
    current_cart.products.push({ id:id,image:image, name:name, description:description,stock:stock, price:price ,quantity: 1});}
    current_cart.count ++;
    display_cart_logo();
    save_cart();
    addtocartshow();
    if (total!= null) {
    let total =localStorage.getItem("total");
    total = Number(total);
    localStorage.setItem("total", total+=a);
}
}
//------------------------------------------------------------------------


function addtocartshow() {
    let add = document.querySelector('#added').innerHTML="Product succesfully added to Cart 🛒 ";
    setTimeout(function addtocartshow(){
    document.getElementById("added").innerHTML="";
    },3000);

}


//show the cart -----------------------------------------
function display_cart() {
    const cartcontent=document.querySelector('#cartcontent')
    current_cart.products.forEach((product) => {
    cartcontent.innerHTML+="<tr><td>"
    +"🗑️"+`<button onclick="removeItem('1')">X</button>`+ "</td><td>"
    + product.id + "</td><td>"
    + product.image + "</td><td>"
    + product.name + "</td><td>"
    + product.description + "</td><td>"
    + "$"+Math.round(product.price)+",00" + "</td><td>"
    + Math.round(product.stock) + "</td><td>"
    + product.quantity  + "</td><td>"
    + "$"+product.price*product.quantity+",00" + "</td></tr>";
    });
    if (localStorage.getItem("total")!= null){
    cartcontent.innerHTML+="<tr><td>"+"Total"+"<td><td>"+"<td><td>"+"<td><td>"+"<td>"+"<td>"+"$"+localStorage.getItem("total")+",00"+"</td></tr>"
}
}
//-----------------------------------------------

//save and load ------------------------------------------------
function save_cart() {
    localStorage.setItem('current_cart', JSON.stringify(current_cart));
}

function load_cart() {
    const saved_cart=JSON.parse(localStorage.getItem('current_cart'));
    if(saved_cart!== undefined && saved_cart !==null )
    current_cart=saved_cart;
    display_cart_logo();
}

load_cart();
//--------------------------------------------------------------------------
//cookies------------------------------------------------------------------
const strorageType = localStorage;
const consentProperty = 'consentProperty';
const showPopup = () => !strorageType.getItem(consentProperty);
const saveToStorage = () => strorageType.setItem(consentProperty, true);
window.onload = () => {
if (showPopup()){
const consent = confirm('This website uses cookies to improve your experience, would you like to accept them?');
if(consent) {
    saveToStorage();
}
}
};
//-----------------------------------------------------------------------

//remove product from cart-----------------------------------------------
function removeItem(id, qty=0){
    for (let i=0; i<current_cart.products.length; i++) {
    if (current_cart.products[i].id === id) {
        if (qty > 0) {
          current_cart.products[i].quantity-=qty  
        }
        if (current_cart.products[i].quantity < 1 || qty === 0) {
            current_cart.products.splice(i,1);
            let total =localStorage.getItem("total");
            total = Number(total);
            localStorage.setItem("total", total+=current_cart.products[i].quantity*current_cart.products[i].price);           
            current_cart.count-=current_cart.products[i].quantity;
        }
        display_cart();
        save_cart();
        document.location.reload()
          
        
    }
    }

}
//-----------------------------------------------------------------------------------------------------------------------------

console.log(current_cart.count)




