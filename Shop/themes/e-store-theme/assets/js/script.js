//===Preloader========================================================================
//!!!!!!!!!!!!!!!!!!!! add class _lock to all body 
window.addEventListener('load', () => {
   if (document.querySelector('.preloader')) {
      const preloader = document.querySelector('.preloader');
      setTimeout(function () {
         preloader.classList.add("loaded");
      }, 1000);
      setTimeout(function () {
         document.querySelector('body').classList.remove("_lock");
      }, 950);
   }
});

//==========================================click on window====================================
//===========================================================================================
window.onload = function () {
   document.addEventListener("click", documentActions);
   function documentActions(e) {
      const targetElement = e.target;
      //===========================================================================
      //===add class "active" to MENU KATALOG to open it
      if (window.innerWidth > 767 && isMobile.touchScreen()) { //
         if (targetElement.classList.contains('menu__link-katalog')) {
            document.querySelector('.menu__item-katalog').classList.toggle('_active');
            document.querySelector('.header-color').classList.toggle('_active');
         } else if (!targetElement.closest('.menu__item-katalog') && document.querySelectorAll('menu__item-katalog._active')) {
            document.querySelector('.menu__item-katalog').classList.remove('_active');
            document.querySelector('.header-color').classList.remove('_active');
         }
      }
      //===========================================================================
      //===add clas "active" to open SEARCH FORM and close it when klick anywhere else
      if (targetElement.classList.contains('search__icon')) {
         document.querySelector('.search').classList.toggle('_active');
      } else if (!targetElement.closest('.search') && document.querySelector('.search._active')) {
         document.querySelector('.search').classList.remove('_active');
      }
      if (targetElement.classList.contains('search__input')) {
         document.querySelector('.search').classList.add('_active');
      }
      //==========================================================================
      //======add class 'lock' to body and 'active' to burger and menu  and remove drop menu classes
      if (targetElement.classList.contains('header-main__burger')) {
         document.body.classList.toggle('_lock');
         document.querySelector('.header-main__burger').classList.toggle("_active");
         document.querySelector('.header-main__menu').classList.toggle('_active');
         //
         //delate clases in menu when close burger
         //cycle of delating every class if it exist
         // document.querySelector('.sub-katalog').classList.remove('_display');
         // document.querySelector('.katalog').classList.remove('_display');
         // document.querySelector('.katalog ').classList.remove('_swipe');
         // document.querySelector('.menu').classList.remove("_swipe");
         const el = document.querySelectorAll('.sub-katalog');
         if (el.length > 0) {
            for (i = 0; i < el.length; i++) {
               let elIndex = el[i];
               setTimeout(function () {
                  elIndex.classList.remove('_display')
               }, 300);

            }
         }
         const el2 = document.querySelectorAll('.katalog');
         if (el2.length > 0) {
            for (i = 0; i < el2.length; i++) {
               let elIndex = el2[i];
               setTimeout(function () {
                  elIndex.classList.remove('_display')
               }, 300);

            }
         }
         const el3 = document.querySelectorAll('.katalog');
         if (el3.length > 0) {
            for (i = 0; i < el3.length; i++) {
               let elIndex = el3[i];
               setTimeout(function () {
                  elIndex.classList.remove('_swipe')
               }, 300);

            }
         }
         const el4 = document.querySelectorAll('.menu');
         if (el4.length > 0) {
            for (i = 0; i < el4.length; i++) {
               let elIndex = el4[i];
               setTimeout(function () {
                  elIndex.classList.remove('_swipe')
               }, 300);
            }
         }

      } else if ((!targetElement.closest('.header-main__menu') && document.querySelector('.header-main__menu._active'))) {
         document.body.classList.remove('_lock');
         document.querySelector('.header-main__burger').classList.remove("_active");
         document.querySelector('.header-main__menu').classList.remove('_active');
         //
         //
         //delate clases in menu when close burger
         //cycle of delating every class if it exist
         // document.querySelector('.sub-katalog').classList.remove('_display');
         // ocument.querySelector('.katalog').classList.remove('_display');
         // document.querySelector('.katalog ').classList.remove('_swipe');
         // document.querySelector('.menu').classList.remove("_swipe");
         const el = document.querySelectorAll('.sub-katalog');
         if (el.length > 0) {
            for (i = 0; i < el.length; i++) {
               let elIndex = el[i];
               setTimeout(function () {
                  elIndex.classList.remove('_display')
               }, 300);

            }
         }
         const el2 = document.querySelectorAll('.katalog');
         if (el2.length > 0) {
            for (i = 0; i < el2.length; i++) {
               let elIndex = el2[i];
               setTimeout(function () {
                  elIndex.classList.remove('_display')
               }, 300);

            }
         }
         const el3 = document.querySelectorAll('.katalog');
         if (el3.length > 0) {
            for (i = 0; i < el3.length; i++) {
               let elIndex = el3[i];
               setTimeout(function () {
                  elIndex.classList.remove('_swipe')
               }, 300);

            }
         }
         const el4 = document.querySelectorAll('.menu');
         if (el4.length > 0) {
            for (i = 0; i < el4.length; i++) {
               let elIndex = el4[i];
               setTimeout(function () {
                  elIndex.classList.remove('_swipe')
               }, 300);
            }
         }
      }
      // 
      // 
      //
      //===========================================================================
      //===============================================================Cart ===========
      //===========================================================================
      // 
      // ===========add to cart  
      // when click in buy botton in PRODUCT PAGE
               // if (targetElement.classList.contains('buy-button') && targetElement.closest('.content')) {
               //    const productId = targetElement.closest('.content').dataset.prodid; //get info of the prodid
               //    addToCart(targetElement, productId); // run function
               //    e.preventDefault(); //unable link 
               // }
      //
      // add to cart function when click in buy button in INDEX.HTML
               // if (targetElement.classList.contains('buy-button') && targetElement.closest('.product-card')) {
               //    const productId = targetElement.closest('.product-card').dataset.prodid; //get info of the prodid
               //    addToCartMAIN(targetElement, productId); // run function
               //    e.preventDefault(); //unable link 
               // }
      //
      //add class active when click on cart and remove when click anywhere else.
               // if (targetElement.classList.contains("cart__icon") || targetElement.closest('.cart__icon')) {
               //    if (document.querySelector('.cart-list').children.length > 0) {
               //       document.querySelector('.cart').classList.toggle('_active');
               //    }
               //    e.preventDefault();
               // } else if (!targetElement.closest('.cart') && !targetElement.classList.contains('buy-button')) {
               //    document.querySelector('.cart').classList.remove('_active');
               // }
      //
      // ========  counter 
      // push the increase button to add 
               // if (targetElement.classList.contains('cart-list__quantity-decrease')) {
               //    const productId = targetElement.closest('.cart-list__item').dataset.cartProdid; // camelCase !important
               //    // e.preventDefault();
               //    updateCart(targetElement, productId, false);
               // }
               // if (targetElement.classList.contains('cart-list__quantity-increase')) {
               //    const productId = targetElement.closest('.cart-list__item').dataset.cartProdid; // camelCase !important
               //    // e.preventDefault();
               //    updateCart(targetElement, productId, true);
               // }
      //
      //===================remove all
      //remove + down
               // if (targetElement.classList.contains('cart-list__delete')) {
               //    const productId = targetElement.closest('.cart-list__item').dataset.cartProdid; // camelCase !important
               //    e.preventDefault();
               //    updateCart2(targetElement, productId, false);
               // }
      //===========================================================================
   }
   ///===============================================
   ///===============================================
   ///============================CART==============
   ///===============================================
   ///===============================================
   //==========fly script
               //    function addToCart(productButton, productId) {
               //       if (!productButton.classList.contains('_hold')) { //if target element dont have hold
               //          productButton.classList.add('_hold'); //add hold
               //          productButton.classList.add('_fly'); //add fly class

               //          const cart = document.querySelector('.cart__icon');
               //          const product = document.querySelector(`[data-prodid="${productId}"]`);
               //          const productImage = product.querySelector('.submain-photo__image');
               //          const buybutton = product.querySelector('.buy-button');

               //          const productImageFly = productImage.cloneNode(true); // clone product image submain-photo_iage (you can clone any div)
               //          const productImageFlyWidth = productImage.offsetWidth; // get width of image in submain-photo_image
               //          const productImageFlyHeight = productImage.offsetHeight; // get height in submain-photo_image
               //          const productImageFlyTop = buybutton.getBoundingClientRect().top; // get top of the button
               //          const productImageFlyLeft = buybutton.getBoundingClientRect().left; // get left of the button


               //          //===========fly script
               //          productImageFly.setAttribute('class', '_flyImage IEimg'); // add to clone element class and style it in _cart.scss
               //          productImageFly.style.cssText = `
               //       left: ${productImageFlyLeft}px;
               //       top: ${productImageFlyTop}px;
               //       width: ${productImageFlyWidth}px;
               //       height: ${productImageFlyHeight}px;
               //       `; // add css property 

               //          document.body.append(productImageFly);  // show this clone in the end of body 

               //          const cartFlyLeft = cart.getBoundingClientRect().left; //get cordinates of the cart
               //          const cartFlyTop = cart.getBoundingClientRect().top;
               //          productImageFly.style.cssText = `
               //          left: ${cartFlyLeft}px;
               //          top: ${cartFlyTop}px;
               //          width: 0px;
               //          height: 0px;
               //          opacity: 0;
               //          `; // sent clone to other cordinates. transiton is in _cart.scss

               //          // remove clone
               //          productImageFly.addEventListener('transitionend', function () { //when transition end
               //             if (productButton.classList.contains('_fly')) { // if element clicked contains fly
               //                productImageFly.remove();//remove clone
               //                updateCart(productButton, productId); // functioin that get element in cart
               //                productButton.classList.remove('_fly') // remove
               //             }
               //          })
               //       }

               //       ///===========if you want to add without fly animation left only this
               //       // updateCart(productButton, productId); // functioin that get element in cart
               //    }
               //    function updateCart(productButton, productId, productAdd = true) {
               //       const cart = document.querySelector('.cart');
               //       const cartIcon = cart.querySelector('.cart__icon');
               //       const cartQuantity = cartIcon.querySelector('span');
               //       const cartProduct = document.querySelector(`[data-cart-prodid="${productId}"]`);
               //       const cartList = document.querySelector('.cart-list');

               //       //============add products buy clicking on buy button
               //       if (productAdd) { // if true
               //          if (cartQuantity) { // if there is span descrese its on 1
               //             cartQuantity.innerHTML = ++cartQuantity.innerHTML; // ++
               //          } else { // if not add this
               //             cartIcon.insertAdjacentHTML('beforeend', `<span>1</span>`);
               //          }
               //          // add list of products.
               //          if (!cartProduct) { // if product isn't added form this
               //             const product = document.querySelector(`[data-prodid="${productId}"]`);
               //             const cartProductImage = product.querySelector('.submain-photo__image').innerHTML; // get phote from this productID
               //             const cartProductTitle = product.querySelector('.buy__title').innerHTML; // get title
               //             const cartProductPrice = product.querySelector('.buy__price').innerHTML;
               //             //form a html code which we will add to cart
               //             const cartProductContent = `
               //             <a href="" class="cart-list__image IEimg">${cartProductImage}</a>
               //             <div class="cart-list__body">
               //                <a href="" class="cart-list__title">${cartProductTitle}</a>
               //                <div class="cart-list__forms">
               //                   <div class="cart-list__form-color"> black </div>
               //                   <div class="cart-list__form-size"> S </div>
               //                </div>
               //                <div class="cart-list__price"> ${cartProductPrice} </div>
               //                <div class="cart-list__bottom"> 
               //                   <div class="cart-list__quantity">
               //                      <button class="cart-list__quantity-decrease cart-list__quantity-button">-</button> 
               //                      <span>1</span>
               //                      <button class="cart-list__quantity-increase cart-list__quantity-button">+</button>
               //                   </div>
               //                   <a href="" class="cart-list__delete">удалить</a>
               //                </div>
               //             </div>
               //             `;
               //             // integrate to html. create li with id and class and put there a cartProductContent;
               //             // <li data-cart-prodid="${productId}" class="cart-list__item">${cartProductContent}</li>
               //             cartList.insertAdjacentHTML('beforeend', `<li data-cart-prodid="${productId}" class="cart-list__item">${cartProductContent}</li>`)
               //          }
               //          else { //if this product is in cart do this
               //             const cartProductQuantity = cartProduct.querySelector('.cart-list__quantity span'); // get cart list 
               //             cartProductQuantity.innerHTML = ++cartProductQuantity.innerHTML; // increase to 1 
               //          }

               //          // remove hold to add new 
               //          productButton.classList.remove('_hold');
               //       }
               //       //=================remove products buy clicking on remove button. 
               //       else {
               //          const cartProductQuantity = cartProduct.querySelector('.cart-list__quantity span'); // get cart list
               //          cartProductQuantity.innerHTML = --cartProductQuantity.innerHTML; //decrease in one counttity of product 
               //          if (!parseInt(cartProductQuantity.innerHTML)) { // if span = 0 
               //             cartProduct.remove(); // delate this prod
               //          }

               //          const cartQuantityValue = --cartQuantity.innerHTML; //decrease on one all quantity of prod 

               //          if (cartQuantityValue) { // if it's bigget than 0 chanhe span value
               //             cartQuantity.innerHTML = cartQuantityValue;
               //          } else {
               //             cartQuantity.remove();
               //             cart.classList.remove('_active');
               //          }
               //       }
               //    }
               //    ///===============================================
               //    ///===============================================
               //    ///==============================add in main index.html==========
               //    ///===============================================
               //    function addToCartMAIN(productButton, productId) {
               //       if (!productButton.classList.contains('_hold')) { //if target element dont have hold
               //          productButton.classList.add('_hold'); //add hold
               //          productButton.classList.add('_fly'); //add fly class

               //          const cart = document.querySelector('.cart__icon');
               //          const product = document.querySelector(`[data-prodid="${productId}"]`);
               //          const productImage = product.querySelector('.product-card__image');
               //          const buybutton = product.querySelector('.buy-button');

               //          const productImageFly = productImage.cloneNode(true); // clone product image submain-photo_iage (you can clone any div)
               //          const productImageFlyWidth = productImage.offsetWidth; // get width of image in submain-photo_image
               //          const productImageFlyHeight = productImage.offsetHeight; // get height in submain-photo_image
               //          const productImageFlyTop = productImage.getBoundingClientRect().top; // get top of the button
               //          const productImageFlyLeft = productImage.getBoundingClientRect().left; // get left of the button


               //          //===========fly script
               //          productImageFly.setAttribute('class', '_flyImage IEimg'); // add to clone element class and style it in _cart.scss
               //          productImageFly.style.cssText = `
               //       left: ${productImageFlyLeft}px;
               //       top: ${productImageFlyTop}px;
               //       width: ${productImageFlyWidth}px;
               //       height: ${productImageFlyHeight}px;
               //       `; // add css property 

               //          document.body.append(productImageFly);  // show this clone in the end of body 

               //          const cartFlyLeft = cart.getBoundingClientRect().left; //get cordinates of the cart
               //          const cartFlyTop = cart.getBoundingClientRect().top;
               //          productImageFly.style.cssText = `
               //          left: ${cartFlyLeft}px;
               //          top: ${cartFlyTop}px;
               //          width: 0px;
               //          height: 0px;
               //          opacity: 0;
               //          `; // sent clone to other cordinates. transiton is in _cart.scss

               //          // remove clone
               //          productImageFly.addEventListener('transitionend', function () { //when transition end
               //             if (productButton.classList.contains('_fly')) { // if element clicked contains fly
               //                productImageFly.remove();//remove clone
               //                updateCartMAIN(productButton, productId); // functioin that get element in cart
               //                productButton.classList.remove('_fly') // remove
               //             }
               //          })
               //       }

               //       ///===========if you want to add without fly animation left only this
               //       // updateCart(productButton, productId); // functioin that get element in cart
               //    }
               //    function updateCartMAIN(productButton, productId, productAdd = true) {
               //       const cart = document.querySelector('.cart');
               //       const cartIcon = cart.querySelector('.cart__icon');
               //       const cartQuantity = cartIcon.querySelector('span');
               //       const cartProduct = document.querySelector(`[data-cart-prodid="${productId}"]`);
               //       const cartList = document.querySelector('.cart-list');

               //       //============add products buy clicking on buy button
               //       if (productAdd) { // if true
               //          if (cartQuantity) { // if there is span descrese its on 1
               //             cartQuantity.innerHTML = ++cartQuantity.innerHTML; // ++
               //          } else { // if not add this
               //             cartIcon.insertAdjacentHTML('beforeend', `<span>1</span>`);
               //          }
               //          // add list of products.
               //          if (!cartProduct) { // if product isn't added form this
               //             const product = document.querySelector(`[data-prodid="${productId}"]`);
               //             const cartProductImage = product.querySelector('.product-card__image').innerHTML; // get phote from this productID
               //             const cartProductTitle = product.querySelector('.product-card__title').innerHTML; // get title
               //             const cartProductPrice = product.querySelector('.product-card__price').innerHTML;
               //             //form a html code which we will add to cart
               //             const cartProductContent = `
               //             <a href="" class="cart-list__image IEimg">${cartProductImage}</a>
               //             <div class="cart-list__body">
               //                <a href="" class="cart-list__title">${cartProductTitle}</a>
               //                <div class="cart-list__forms">
               //                   <div class="cart-list__form-color"> black </div>
               //                   <div class="cart-list__form-size"> S </div>
               //                </div>
               //                <div class="cart-list__price"> ${cartProductPrice} </div>
               //                <div class="cart-list__bottom"> 
               //                   <div class="cart-list__quantity">
               //                      <button class="cart-list__quantity-decrease cart-list__quantity-button">-</button> 
               //                      <span>1</span>
               //                      <button class="cart-list__quantity-increase cart-list__quantity-button">+</button>
               //                   </div>
               //                   <a href="" class="cart-list__delete">удалить</a>
               //                </div>
               //             </div>
               //             `;
               //             // integrate to html. create li with id and class and put there a cartProductContent;
               //             // <li data-cart-prodid="${productId}" class="cart-list__item">${cartProductContent}</li>
               //             cartList.insertAdjacentHTML('beforeend', `<li data-cart-prodid="${productId}" class="cart-list__item">${cartProductContent}</li>`)
               //          }
               //          else { //if this product is in cart do this
               //             const cartProductQuantity = cartProduct.querySelector('.cart-list__quantity span'); // get cart list 
               //             cartProductQuantity.innerHTML = ++cartProductQuantity.innerHTML; // increase to 1 
               //          }

               //          // remove hold to add new 
               //          productButton.classList.remove('_hold');
               //       }
               //       //=================remove products buy clicking on remove button. 
               //       else {
               //          const cartProductQuantity = cartProduct.querySelector('.cart-list__quantity span'); // get cart list
               //          cartProductQuantity.innerHTML = --cartProductQuantity.innerHTML; //decrease in one counttity of product 
               //          if (!parseInt(cartProductQuantity.innerHTML)) { // if span = 0 
               //             cartProduct.remove(); // delate this prod
               //          }

               //          const cartQuantityValue = --cartQuantity.innerHTML; //decrease on one all quantity of prod 

               //          if (cartQuantityValue) { // if it's bigget than 0 chanhe span value
               //             cartQuantity.innerHTML = cartQuantityValue;
               //          } else {
               //             cartQuantity.remove();
               //             cart.classList.remove('_active');
               //          }
               //       }
               //    }
               //    ///===============================delete=========
               //    ///===============================================
               //    function updateCart2(productButton, productId, productAdd = true) {
               //       const cart = document.querySelector('.cart');
               //       const cartIcon = cart.querySelector('.cart__icon');
               //       const cartQuantity = cartIcon.querySelector('span');
               //       const cartProduct = document.querySelector(`[data-cart-prodid="${productId}"]`);
               //       if (productAdd) {
               //          productButton.classList.remove('_hold');
               //       }
               //       else {
               //          if (cartProduct) {
               //             cartProduct.remove(); // delate this prod
               //          }
               //          const cartQuantityValue = cartQuantity.innerHTML = ""; //decrease on one all quantity of prod 

               //          if (cartQuantityValue) { // if it's bigget than 0 chanhe span value
               //             cartQuantity.innerHTML = cartQuantityValue;
               //          } else {
               //             cartQuantity.remove();
               //             cart.classList.remove('_active');
               //          }
               //       }
               //    }
               //    ///===============================================
               //    ///===============================================
               // }

}               
//===========================================================================
//===========================================================================
//=========================================================chage color when hover the katalog. 
//===========================================================================
if (document.querySelector('.header') && !isMobile.touchScreen()) {
   document.querySelector('.menu__link-katalog').onmouseover = function (event) {
      document.querySelector('.header-color').classList.add('_active');
   };
   document.querySelector('.menu__link-katalog').onmouseout = function (event) {
      document.querySelector('.header-color').classList.remove('_active');
   };
   document.querySelector('.katalog').onmouseover = function (event) {
      document.querySelector('.header-color').classList.add('_active');
   };
   document.querySelector('.katalog').onmouseout = function (event) {
      document.querySelector('.header-color').classList.remove('_active');
   };
}
//===========================================================================
//===========================================================================
//=========================================================drop swipe menu
//===========================================================================
// 
// window.addEventListener('resize', function (event) {
// also we have click events that delate classes like display and swipe (it is in window.onload )
if (window.innerWidth < 767 && document.querySelector('.header')) { //&& isMobile.touchScreen()
   let link = document.querySelectorAll('.flipping-button');
   for (i = 0; i < link.length; i++) {
      let subMenu = link[i].nextElementSibling;
      let thisArrow = link[i].parentNode.parentNode.parentNode.parentNode.parentNode;

      link[i].addEventListener('click', function () {
         subMenu.classList.toggle('_display');
         thisArrow.classList.toggle('_swipe');
      })
   }
   let arrow = document.querySelectorAll('.goback__link');
   for (i = 0; i < arrow.length; i++) {
      let subMenu2 = arrow[i].parentNode.parentNode.parentNode.parentNode.parentNode;
      let thisArrow2 = arrow[i].parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;

      arrow[i].addEventListener('click', function () {
         setTimeout(function () {
            subMenu2.classList.remove('_display');
         }, 300);
         thisArrow2.classList.remove('_swipe');
      })
   }
}
//rules:
//
// 1. rigit construction:
//                1    <div class="menu"> ========= (swipe)
// 					2		<div class="menu__container">
// 					3			<div class="menu__body">
// 					4				<ul class="menu__list">
//                5               <li class="menu__item ">
//                6                 <div class="menu__link flipping-button"> First Block #1 </div>
//                7                    <div class="katalog"> =======(display)
// add class="flipping-button" to a 6th element of construction
//
// 2. if we need return button, add class="govack-button" to first li element:
//                1                  <div class="katalog">========= (swipe)
// 					2							<div class="katalog__container">
// 					3								<div class="katalog__body">
// 					4									<ul class="katalog__list">
// 					5										<li class="katalog__item">
// 					6											<button class="goback-button">НАЗАД </button>
//
// 3. if we need link and flipping button at the same time:
//                               <li class="katalog__item">
//                                  <a href="index.html" class="katalog__link">Second block #1.1</a>
//                                  <button class="flipping-button"> |>>>>>|</button>
//                                  <div class="sub-katalog"></div>
//                               </li>
//    + css
//             button.flipping-button {
//                flex: 1 1 auto;
//                text-align: right;
//                background-color: transparent;
//             }
//
// 4.  if we need icon
//                                <div class="katalog__link flipping-button ">block #1.2
//                                   <span>
// 													|>>>>>|
//                                   </span>
//                                </div>
//    + css
//            .flipping-button span {
//            float: right;
//            }
// add css:
// .flipping-button span {
//    float: right;
// }
//
//
// 5. you may also use the same constraction with the same clases.
// 6. don't forget about remove clases buy click in burger again. (if you want all reset though)
//===========================================================================
//===========================================================================
//===========================================================================
//===========================================================================
//===========================================spoiler 
//===========================================================================
//======footer
if (window.innerWidth < 767 && document.querySelector('.info__title')) {
   // const accordions = document.querySelectorAll('.info__column');
   // for (item of accordions) {
   //    item.addEventListener('click', function () {
   //       if (this.classList.contains('_active')) {
   //          this.classList.remove('_active');
   //       } else {
   //          for (el of accordions) {
   //             el.classList.remove('_active');
   //          }
   //          this.classList.add('_active')
   //       }
   //    })
   // }
   var acc = document.getElementsByClassName("info__title");
   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
         if (this.classList.contains('_active')) {
            this.classList.remove('_active');
            this.nextElementSibling.style.maxHeight = null;
         } else {
            // remove this to not autoclose/
            for (i = 0; i < acc.length; i++) {
               acc[i].classList.remove('_active');
               acc[i].nextElementSibling.style.maxHeight = null;
            }
            this.classList.add('_active')
            this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
         }
      });
   }
   // info__item
}
//===delivery.
if (window.innerWidth < 767 && document.querySelector('.table__column-first')) {
   var acc = document.getElementsByClassName("table__column-first");
   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
         if (this.classList.contains('_active')) {
            this.classList.remove('_active');
            this.nextElementSibling.style.height = null;
         } else {
            // remove this to not autoclose/
            // for (i = 0; i < acc.length; i++) {
            //    acc[i].classList.remove('_active');
            //    this.nextElementSibling.classList.remove('_active');
            //    acc[i].nextElementSibling.style.maxHeight = null;
            // }
            this.classList.add('_active');
            this.nextElementSibling.style.height = this.nextElementSibling.scrollHeight + 20 + "px";
         }
      });
   }
   // info__item
}
//================product page 
if (window.innerWidth < 767 && document.querySelector('.content__characteristic')) {
   var acc = document.getElementsByClassName("characteristic__title");
   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
         if (this.classList.contains('_active')) {
            this.classList.remove('_active');
            this.nextElementSibling.style.maxHeight = null;
         } else {
            // remove this to not autoclose/
            // for (i = 0; i < acc.length; i++) {
            //    acc[i].classList.remove('_active');
            //    acc[i].nextElementSibling.style.maxHeight = null;
            // }
            this.classList.add('_active')
            this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
         }
      });
   }
   // info__item
}
if (window.innerWidth < 767 && document.querySelector('.buy__info-title')) {
   var acc = document.getElementsByClassName("buy__info-title");
   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
         if (this.classList.contains('_active')) {
            this.classList.remove('_active');
            this.nextElementSibling.style.maxHeight = null;
         } else {
            // remove this to not autoclose/
            for (i = 0; i < acc.length; i++) {
               acc[i].classList.remove('_active');
               acc[i].nextElementSibling.style.maxHeight = null;
            }
            this.classList.add('_active')
            this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
         }
      });
   }
   // info__item
}
//=================filter button
if (document.querySelector('.filter__button')) {
   var acc = document.getElementsByClassName("filter__button");
   for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function (e) {
         if (this.nextElementSibling.classList.contains('_active')) {
            this.nextElementSibling.classList.remove('_active');
            this.nextElementSibling.style.maxHeight = null;
         }
         else {
            this.nextElementSibling.classList.add('_active');
            this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
         }
      });
   }
}

// });
//===========================================================================
//===========================================================================
//===========================================================================
//===========================================================================
//======================================IEimg for internet explorer 
//===========================================================================
if (document.querySelector('.IEimg')) {
   if (isBrowse.IE()) {
      function ibg() {
         let ibg = document.querySelectorAll(".IEimg");
         for (var i = 0; i < ibg.length; i++) {
            if (ibg[i].querySelector('img')) {
               ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
               ibg[i].style.backgroundPosition = "center";
               ibg[i].style.backgroundSize = "cover";
               ibg[i].style.backgroundRepeat = "no-repeat";
               ibg[i].style.position = " relative";
               ibg[i].children[0].style.display = "none";
            }
         }
      }
      ibg();
   }
}
//rules:
// add class IEimg to img container 
// don't forget about define-device.js
//===========================================================================
//==========================================================Header scroll
//===========================================================================
if (document.querySelector('.header')) {
   const headerElement = document.querySelector(".header");
   const callback = function (entries, observer) {
      if (entries[0].isIntersecting) {
         headerElement.classList.remove('_scroll');
      }
      else {
         headerElement.classList.add('_scroll');
      }
   };
   const headerObserver = new IntersectionObserver(callback);
   headerObserver.observe(headerElement);
}
//===========================================================================
//===========================================================================
//===========================================move object 
//===========================================================================
// product page/
// coment becouse of crash of fly to cart 
// if (window.innerWidth < 767 && document.querySelector('.content__buy')) {
//    const parent_original = document.querySelector('.buy__text-container'); // where is
//    const parent = document.querySelector('.product-page__content'); // where send
//    const item = document.querySelector('.buy__title'); // what to send
//    if (!item.classList.contains('moved')) {
//       parent.insertBefore(item, parent.children[0]);
//       item.classList.add('moved')
//    } else if (item.classList.contains('moved')) {
//       parent_original.insertBefore(item, parent_original.children[0]);
//       item.classList.remove('moved');
//    }
// }
// lang
//===========================================================================
//===========================================================================
//
//
// 
///
///==================================SLIDERS======================
//
//===========================================================================
//===========================================================================
//===========================================slider ads-slider
//===========================================================================
if (document.querySelector('.slider-main__slider')) {
   //===add needed css properties for some slasses to work corectly
   document.querySelector(".slider-main__slider").children[0].style.display = "flex";
   var el = document.querySelector(".slider-main__slider").children[0]
   for (var i = 0; i < el.children.length; i++) {
      el.children[i].style.flexShrink = "0";
   }
   var adsSlider = new Swiper('.slider-main__slider', {
      //
      wrapperClass: "slider-main__wrapper",
      slideClass: "slider-main__slide",
      //
      observer: true,
      observeParents: true,
      //
      // direction: 'vertical', // direction
      //if direction 'vertical' set flex-direction column + set max height to slider-catalog__slider
      slidesPerView: 1,
      watchOveFflow: false,
      loop: true, // infinite
      spaceBetween: -1, //distance between slides
      speed: 300, //speed of slide turning
      preloadImages: false, // disable preload of img
      grabCursor: true,
      //
      pagination: {
         el: '.slider-main__dots',
         clickable: true,
         dynamicBullets: false,
         renderBullet: function (index, className) {
            return '<span class="' + className + '">' + '0' + (index + 1) + '</span>';
         },
      },
      navigation: {
         nextEl: '.slider-main__next',
         prevEl: '.slider-main__prev',
      },
      parallax: true,
      breakpoints: {
         767: {

         },
      },
   });
}
//===========================================================================
//===========================================================================
//=====================================================submain product page
//===========================================================================
if (document.querySelector('.submain-photo__slider')) {
   //===add needed css properties for some slasses to work corectly
   document.querySelector(".submain-photo__slider").children[0].style.display = "flex";
   var el = document.querySelector(".submain-photo__slider").children[0]
   for (var i = 0; i < el.children.length; i++) {
      el.children[i].style.flexShrink = "0";
   }
   var thumbPhotoSlider = new Swiper('.submain-photo__slider', {
      //
      wrapperClass: "submain-photo__wrapper",
      slideClass: "submain-photo__slide",
      //
      observer: true,
      observeParents: true,
      //
      direction: 'vertical', // direction
      // if direction 'vertical' set flex-direction column + set max height to slider-catalog__slider
      slidesPerView: 'auto',
      // slidesPerGroup: 2,
      watchOveFflow: false,
      loop: false, // infinite
      spaceBetween: 15, //distance between slides
      speed: 300, //speed of slide turning
      preloadImages: false, // disable preload of img
      // grabCursor: true,
      freeMode: {
         enabled: true,
         sticky: false,
         momentumBounce: false,
      },
      freeModeMomentum: true,
      slideToClickedSlide: true,
      watchSlidesProgress: true,
      scrollbar: {
         el: '.submain-photo__scrollbar',
         draggable: false,
      },
      mousewheel: {
         enabled: true,
         sensitivity: 1,
         eventsTarget: ".submain-photo",
         releaseOnEdges: false,
      },
   });
}
//===========================================================================
//===========================================================================
//=====================================================main prod page
//===========================================================================
if (document.querySelector('.main-photo__slider')) {
   //===add needed css properties for some slasses to work corectly
   document.querySelector(".main-photo__slider").children[0].style.display = "flex";
   var el = document.querySelector(".main-photo__slider").children[0]
   for (var i = 0; i < el.children.length; i++) {
      el.children[i].style.flexShrink = "0";
   }
   var mainPhotoSlider = new Swiper('.main-photo__slider', {
      //
      wrapperClass: "main-photo__wrapper",
      slideClass: "main-photo__slide",
      //
      observer: true,
      observeParents: true,

      //
      // direction: 'vertical', // direction
      // if direction 'vertical' set flex-direction column + set max height to slider-catalog__slider
      slidesPerView: 1,
      watchOveFflow: false,
      // zoom: true,
      clickable: true,
      loop: false, // infinite
      spaceBetween: 0, //distance between slides
      speed: 300, //speed of slide turning
      preloadImages: false, // disable preload of img
      grabCursor: false,
      simulateTouch: false, // on 
      effect: 'fade',
      thumbs: {
         swiper: thumbPhotoSlider,
      },
      mousewheel: {
         sensitivity: 1,
         eventsTarget: ".main-photo"
      },
      // zoom: {
      //    maxRatio: 5,
      // },
      keyboard: {
         enabled: true,
         onlyInViewport: true,
         pageUpDown: true,
      }
   });
}
//===========================================================================
//===========================================================================
//==========================================================recomend slider
//===========================================================================
if (document.querySelector('.recomend-slider__slider')) {
   //===add needed css properties for some slasses to work corectly
   document.querySelector(".recomend-slider__slider").children[0].style.display = "flex";
   var el = document.querySelector(".recomend-slider__slider").children[0]
   for (var i = 0; i < el.children.length; i++) {
      el.children[i].style.flexShrink = "0";
   }
   var catalogSlider = new Swiper('.recomend-slider__slider', {
      //
      wrapperClass: "recomend-slider__wrapper",
      slideClass: "recomend-slider__slide",
      navigation: {
         nextEl: '.slider-recomend-header__button-next',
         prevEl: '.slider-recomend-header__button-prev',
      },
      observer: true,
      observeParents: true,
      //
      // direction: 'vertical', // direction
      //if direction 'vertical' set flex-direction column + set max height to slider-catalog__slider
      spaceBetween: 20, //distance between slides
      slidesPerView: "auto",
      // 
      watchOveFflow: false,
      speed: 300, //speed of slide turning
      preloadImages: false, // disable preload of img
      grabCursor: true,
      //
      breakpoints: {
         // 767: {
         //    spaceBetween: 20,
         //    slidesPerView: "auto",
         // },
         992: {
            slidesPerView: 4,
            spaceBetween: 40,
            freeMode: false,
         },
      },
      loop: false, // infinite
      freeMode: {
         enabled: true,
         minimumVelocity: 0.02,
         momentum: true,
         momentumRatio: 0.55,
         momentumVelocityRatio: 0.75,
         momentumBounce: true,
         momentumBounceRatio: 2,
         // sticky: true, // may change 
      },

   });
}
////==========================================================================================
// 

////==========================================================================================
////==========================================================================================
//================================================BODYLOCK====================================
////==========================================================================================
////==========================================================================================
////==========================================================================================
const body = document.querySelector('body'); // get body class i case to block scroll
const lockPadding = document.querySelectorAll(".lock-padding")// 
let unlock = true; // double cklick prevent set unlock as true as default
const timeout = 260; // the same itme transition that in css
//=====================================BODY Lock-Unlock
//=================when lock Body
// here we heed class body for body 
function bodyLock() {
   const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth + 'px';  // get a width of scroll 
   //=========if we have fixed elements, it heeds class = "lock-padding" 
   if (lockPadding.length > 0) {
      for (let index = 0; index < lockPadding.length; index++) {
         const el = lockPadding[index];
         el.style.paddingRight = lockPaddingValue;
      }
   }
   //================================================
   body.style.paddingRight = lockPaddingValue; // add padding right to body to prevent content of steping 
   body.classList.add('_lock'); // add lock class to and body to prevent scroll

   // for prevent bouble click  when unlock is false we are unlikely to run openЗopup function
   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}
function bodyUnLock() {
   setTimeout(function () { // popup is steping when we close to we need timeout before its close
      if (lockPadding.length > 0) { //
         for (let index = 0; index < lockPadding.length; index++) { // cycle
            const el = lockPadding[index]; // 
            el.style.paddingRight = '0px'; // remove padding in fixed elements 
         }
      }
      body.style.paddingRight = '0px'; // remove padding from body
      body.classList.remove('_lock'); //remove lock 
   }, timeout);

   // for prevent bouble click  when unlock is false we are unlikely to run openЗopup function
   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}
// 
// rules:
//  1. add class="locl-padding" to a fixed elements such as header.
//  2. timeout should be the same as transition in css.
//  3. add ._lock css property to an body in css. (overflow: hidden)
////==========================================================================================
////==========================================================================================
//=================================================================Popup====================
////==========================================================================================
////==========================================================================================
////==========================================================================================
if (document.querySelector('.popup')) {

   //=============================click scrips to opne{
   //===========open function when to open  
   const popupLinks = document.querySelectorAll('.popup-link'); //  add popup link to every link you want triger a popup
   if (popupLinks.length > 0) { // check how much popup links we have
      for (let index = 0; index < popupLinks.length; index++) { // cycle of popuplinks
         const poupLink = popupLinks[index]; // get every of it 
         poupLink.addEventListener("click", function (e) { // click event 
            const popupName = poupLink.getAttribute('href').replace('#', '');
            const curentPopup = document.getElementById(popupName); //get id than = #(name) in href of link with class popup-link (you can olso generate automaticaly id in here )
            popupOpen(curentPopup);
            e.preventDefault();
         });
      }
   }
   //==========close function for popup
   const popupCloseIcon = document.querySelectorAll('.popup-close');
   if (popupCloseIcon.length > 0) {
      for (let index = 0; index < popupCloseIcon.length; index++) {
         const elClose = popupCloseIcon[index];
         elClose.addEventListener('click', function (e) {
            popupClose(elClose.closest('.popup'));//find a popup class 
            e.preventDefault();
         });
      }
   }
   //================================================}
   //=========================open
   function popupOpen(curentPopup) {
      if (curentPopup && unlock) { // if there is this object and if it opened


         const popupActive = document.querySelector('.popup._active'); // if there is opne class
         if (popupActive) {
            // ==== situation when popup is inside popup =====
            popupClose(popupActive, false); // false means that we cant run bodyUnLock function
            //========================== 
         }
         else {
            bodyLock(); //if no block scroll
         }


         //===========simple procedure
         curentPopup.classList.add('_active'); //add class open
         curentPopup.addEventListener("click", function (e) { // add click function
            // if you click anywhere alse eccept .popup__content it closes. 
            if (!e.target.closest('.popup__content')) { // if popup has no popup__content relatives.
               popupClose(e.target.closest('.popup')); // add close function 
            }
         });
         //=========================
      }
   }
   //====================close 
   function popupClose(popupActive, doUnlock = true) {
      if (unlock) {// if true (we can run it before timeout is finished in body lock)
         popupActive.classList.remove('_active'); //remove active class
         if (doUnlock) { //if doUnlock true
            bodyUnLock(); //run function
         }
      }
   }
   //==================================================
   //=============keyboard close
   document.addEventListener('keydown', function (e) { //keyboard llisten function
      if (e.which === 27) { // if its button is 27 (Escape button)
         const popupActive = document.querySelector('.popup._active');
         popupClose(popupActive);
      }
   });
   //=================================
   //===============================polyfill adaptation to IE
   // (function () {
   //    if (!Element.prototype.closest) {
   //       Element.prototype.closest = function (css) {
   //          var node = this;
   //          while (node) {
   //             if (node.matches(css)) return node;
   //             else node = node.parentElement;
   //          }
   //          return null;
   //       }
   //    }
   // })();

   // (function () {
   //    if (!Element.prototype.matches) {
   //       Element.prototype.matches = Element.prototype.matchesSelector ||
   //          Element.prototype.webkitMatchesSelector ||
   //          Element.prototype.mozMatchesSelector ||
   //          Element.prototype.msMatchesSelector;
   //    }
   // })();
   //==================================
}
//rules :
//  1 popup = 1 popup html, css,
// 
// for popup-close button you need 
// 1. # for href
// 2. and class popup-close
// 
// to conect one popup with button you need:
// 1. popup : id= {value-the-same}
// 2. button href= {# + value-the-same}
// 3. for button you also need a class="popup-link"
// 
// also for scroll blocking you need:
// 1. class="body" for wrapper or body.
// 2. add css property to class="lock"
// 3. if popup button is in fixed element add class="lock-padding" to its parent 
// 
// More:
// 1. add the same time as in css transition for popup animaiton.
// 
//
// What we have: 
// 1. Scroll smothly block + with fixed elements like(header)
// 2. popup 
// 3. popup in popup
// 4. ecs close button
///=================:

////==========================================================================================
////==========================================================================================
////==========================================================================================
////==========================================================================================
////============================================TELOPHONE FORM================================
////==========================================================================================
////==========================================================================================
////========================================================================================== 
if (document.querySelector('.quick-order')) {
   var element = document.getElementById('phone');
   var maskOptions = {

      mask: '+38(000)000-00-00',
      lazy: false

   }
   var mask = new IMask(element, maskOptions);
}
////==========================================================================================
////==========================================================================================
////==================================================Swiper detect==================================
////========================================================================================== 
// if (document.querySelector('#gesuredZone')) {
//    var touchstartX = 0;
//    var touchstartY = 0;
//    var touchendX = 0;
//    var touchendY = 0;

//    var gesuredZone = document.querySelectorAll('#gesuredZone');
//    if (gesuredZone.length > 0) {
//       for (let index = 0; index < gesuredZone.length; index++) {
//          const gesuredZoneIndex = gesuredZone[index];

//          gesuredZoneIndex.addEventListener('touchstart', function (event) {
//             touchstartX = event.changedTouches[0].screenX;
//             touchstartY = event.changedTouches[0].screenY;
//          }, false);
//          gesuredZoneIndex.addEventListener('touchend', function (event) {
//             touchendX = event.changedTouches[0].screenX;
//             touchendY = event.changedTouches[0].screenY;
//             handleGesure();
//          }, false);

//       }
//    }

//    function handleGesure() {
//       if ((touchendX > touchstartX) && ((touchendX - touchstartX) > 60) && ((touchendY - touchstartY) < 80) && ((touchstartY - touchendY) < 80)) {
//          if (document.querySelector('.cart._active')) {
//             document.querySelector('.cart').classList.remove('_active');
//          }
//          if (window.innerWidth < 767 && document.querySelector('.header-main__menu._active')) {
//             document.body.classList.remove('_lock');
//             document.querySelector('.header-main__burger').classList.remove("_active");
//             document.querySelector('.header-main__menu').classList.remove('_active');
//             //delate clases in menu when close burger
//             //cycle of delating every class if it exist
//             //
//             // document.querySelector('.sub-katalog').classList.remove('_display');
//             // ocument.querySelector('.katalog').classList.remove('_display');
//             // document.querySelector('.katalog ').classList.remove('_swipe');
//             // document.querySelector('.menu').classList.remove("_swipe");
//             const el = document.querySelectorAll('.sub-katalog');
//             if (el.length > 0) {
//                for (i = 0; i < el.length; i++) {
//                   let elIndex = el[i];
//                   setTimeout(function () {
//                      elIndex.classList.remove('_display')
//                   }, 300);

//                }
//             }
//             const el2 = document.querySelectorAll('.katalog');
//             if (el2.length > 0) {
//                for (i = 0; i < el2.length; i++) {
//                   let elIndex = el2[i];
//                   setTimeout(function () {
//                      elIndex.classList.remove('_display')
//                   }, 300);

//                }
//             }
//             const el3 = document.querySelectorAll('.katalog');
//             if (el3.length > 0) {
//                for (i = 0; i < el3.length; i++) {
//                   let elIndex = el3[i];
//                   setTimeout(function () {
//                      elIndex.classList.remove('_swipe')
//                   }, 300);

//                }
//             }
//             const el4 = document.querySelectorAll('.menu');
//             if (el4.length > 0) {
//                for (i = 0; i < el4.length; i++) {
//                   let elIndex = el4[i];
//                   setTimeout(function () {
//                      elIndex.classList.remove('_swipe')
//                   }, 300);
//                }
//             }
//          }
//       }
//       // if ((touchendX < touchstartX) && ((touchstartX - touchendX) > 60)) {
//       //    if (window.innerWidth < 767 && !document.querySelector('.header-main__menu').classList.contains('_active')) {
//       //       document.body.classList.add('_lock');
//       //       document.querySelector('.header-main__burger').classList.add("_active");
//       //       document.querySelector('.header-main__menu').classList.add('_active');
//       //    }
//       // }
//       // if (touchendY < touchstartY) {
//       // }
//       // if (touchendY > touchstartY) {
//       // }
//       // if (touchendY == touchstartY) {
//       // }
//       ////==========================================================================================
//       ////==========================================================================================
//       ////==========================================================================================
//       ////========================================================================================== 
//    }
// }
////==========================================================================================
////==========================================================================================
////==========================================================================================
////=====================================TUBS=================================================
////==========================================================================================
////==========================================================================================
////==========================================================================================
if (document.querySelector('.tabs')) {
   var $tabs = function (target) {
      var
         _elemTabs = (typeof target === 'string' ? document.querySelector(target) : target),
         _eventTabsShow,
         _showTab = function (tabsLinkTarget) {
            var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
            tabsPaneTarget = document.querySelector(tabsLinkTarget.getAttribute('href'));
            tabsLinkActive = tabsLinkTarget.parentElement.querySelector('.tabs__link_active');
            tabsPaneShow = tabsPaneTarget.parentElement.querySelector('.tabs__pane_show');
            // если следующая вкладка равна активной, то завершаем работу
            if (tabsLinkTarget === tabsLinkActive) {
               return;
            }
            // удаляем классы у текущих активных элементов
            if (tabsLinkActive !== null) {
               tabsLinkActive.classList.remove('tabs__link_active');
            }
            if (tabsPaneShow !== null) {
               tabsPaneShow.classList.remove('tabs__pane_show');
            }
            // добавляем классы к элементам (в завимости от выбранной вкладки)
            tabsLinkTarget.classList.add('tabs__link_active');
            tabsPaneTarget.classList.add('tabs__pane_show');
            document.dispatchEvent(_eventTabsShow);
         },
         _switchTabTo = function (tabsLinkIndex) {
            var tabsLinks = _elemTabs.querySelectorAll('.tabs__link');
            if (tabsLinks.length > 0) {
               if (tabsLinkIndex > tabsLinks.length) {
                  tabsLinkIndex = tabsLinks.length;
               } else if (tabsLinkIndex < 1) {
                  tabsLinkIndex = 1;
               }
               _showTab(tabsLinks[tabsLinkIndex - 1]);
            }
         };

      _eventTabsShow = new CustomEvent('tab.show', { detail: _elemTabs });

      _elemTabs.addEventListener('click', function (e) {
         var target = e.target.closest('.tabs__link');
         // завершаем выполнение функции, если кликнули не по ссылке
         if (!target) {
            return;
         }
         // отменяем стандартное действие
         e.preventDefault();
         _showTab(target);
      });

      return {
         showTab: function (target) {
            _showTab(target);
         },
         switchTabTo: function (index) {
            _switchTabTo(index);
         }
      }

   };

   $tabs('.tabs');
}
////==========================================================================================
////==========================================================================================
////==========================================================================================
////=====================================ZOOM SLIDER==========================================
////==========================================================================================
////==========================================================================================
////==========================================================================================
if (document.querySelector('.zoom')) {
   const imageContainer = document.querySelectorAll('.zoom'); // when we click on div with class active

   if (imageContainer.length >= 0) {
      for (let index = 0; index < imageContainer.length; index++) {
         const imageContainerindex = imageContainer[index];
         imageContainerindex.addEventListener("mouseenter", function (e) {
            imageContainerindex.style.backgroundImage = 'url(' + imageContainerindex.children[0].getAttribute('src') + ')';
            imageContainerindex.onmousemove = (event) => { zoom(event) };
         });
      }
   }

   const zoom = (e) => {
      let imageZoom = e.currentTarget;
      e.offsetX ? offsetX = e.offsetX : offsetX; //= e.touches[0].pageX
      e.offsetY ? offsetY = e.offsetY : offsetY; //= e.touches[0].pageY
      x = offsetX / imageZoom.offsetWidth * 100;
      y = offsetY / imageZoom.offsetHeight * 100;
      imageZoom.style.backgroundPosition = x + '% ' + y + '%';
   };
}
//rules:
// 1. don't forget about css properties.
// 2. set class="zoom" to active this zoom
// html constraction: 
//  <div class="photo IEimg zoom">
// 		<img src="img/massacre-of-the-innocents-1.jpeg" alt="">
// 	</div> 
////==========================================================================================
////==========================================================================================
////==========================================================================================
////=====================================LIGHTBOX=============================================
////==========================================================================================
////==========================================================================================
////==========================================================================================
if (document.querySelector('.lightbox-enabled')) {
   // const buildLightbox = () => {
   //    const insertContent =
   //       `    <div class="lightbox" id="gesuredZone">
   //          <div class="lighbox-wrapper">
   //             <div class="lightbox-image-wrapper IEimg">
   //                <img src="" alt="">
   //             </div>
   //             <div class="lightbox-navigations">
   //                <button class="lightbox-button lightbox-button-left"></button>
   //                <button class="lightbox-button lightbox-button-right"></button>
   //             </div>
   //          </div>
   //       </div>  `
   //    document.body.insertAdjacentHTML('beforeend', `${insertContent}`)
   // }
   // buildLightbox()
   //======---------constans of lightbox
   const lightboxEnabled = document.querySelectorAll('.lightbox-enabled'); // get all elemtnts that has special class to define would it will open in lightbox or not 
   const lightboxContainer = document.querySelector('.lightbox'); //get a light box container 
   const lightboxImage = document.querySelector(".lightbox-image-wrapper"); // get wrapper wher is img 
   ///==---get constants of buttons 
   const lightboxBtns = document.querySelectorAll(".lightbox-button");
   const lightboxBtnLeft = document.querySelector(".lightbox-button-left");
   const lightboxBtnRight = document.querySelector(".lightbox-button-right");
   //=============get an array of all lightbox elements
   const lightboxArray = Array.from(lightboxEnabled); // create array of the lighbox element to count they all down as index 
   const lastElementArray = lightboxArray.length - 1; // length of the array

   //===================================open
   lightboxEnabled.forEach(image => {
      image.addEventListener('click', (e) => {
         createLightbox(image);
      });
   })
   //============================when click lightbox 
   if (document.querySelector('.lightbox')) {
      lightboxContainer.addEventListener('click', () => {
         removeLightbox();
      });
   }
   //
   //==================create function
   const createLightbox = (image) => {
      //hold 
      if (!lightboxContainer.classList.contains('_hold')) {
         lightboxContainer.classList.add('_active'); //add active to an lighbox container 
         bodyLock();// body lock
         setActiveImage(image);//triger function 
      }
   }
   //==================remove function
   const removeLightbox = () => {
      lightboxContainer.classList.remove('_active'); // remove active classs
      bodyUnLock(); // body unlock 
      //===hold function
      lightboxContainer.classList.add('_hold');
      setTimeout(function () {
         lightboxContainer.classList.remove('_hold');
      }, timeout)
   }
   //================function that sets image throught div that contains img teg 
   const setActiveImage = (image) => {
      activeElement = lightboxArray.indexOf(image); // this constant get an number of clicked image (in array)
      lightboxImage.children[0].src = image.children[0].src // get src of clicked elemnt and put it to a class= "lighbox-image-wrapper" children (img) 
      //================================HIDE buttons, coment in to activate loop
      loopDisable()
   }
   //
   //=====================when we click to the buttons 
   lightboxBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
         e.stopPropagation(); // prevent closing 
         const transitionSlideHandLer = e.currentTarget.classList; // got name of the class
         if (transitionSlideHandLer.contains('lightbox-button-left')) { // check if the clicked element contains class="lightbox-button-left" its left button
            transitionSlideLeft(); // triger function
         } else { //if dont contains  (tight button)
            transitionSlideRight(); // triger function
         }
      })
   })
   //===============when we click left button 
   const transitionSlideLeft = () => {
      if (activeElement === 0) { // if active element index = 0
         //===========================================LOOP 
         setActiveImage(lightboxArray[lastElementArray]); // set image that is in the end 
      } else { // if not
         setActiveImage(lightboxArray[activeElement - 1]); // set image index of prev element 
      }
   }
   //==================click right button
   const transitionSlideRight = () => {
      if (activeElement === lastElementArray) {
         //=========================================LOOP 
         setActiveImage(lightboxArray[0])
      } else {
         setActiveImage(lightboxArray[activeElement + 1])
      }
   }
   //======================================LOOP false=======================
   const loopDisable = () => {
      //================================HIDE BUTTONS (LOOP: FALSE)
      if (activeElement === 0) { // if clicked element is first 
         lightboxBtnLeft.classList.add('_hide'); // hide left
         lightboxBtnRight.classList.remove('_hide'); // show right 
         // }
      } else if (activeElement === lastElementArray) {
         lightboxBtnRight.classList.add('_hide'); // hide right 
         lightboxBtnLeft.classList.remove('_hide'); // show left
      }
      else {
         lightboxBtns.forEach(btn => { // cycle 
            if (btn.classList.contains('_hide')) { // if all buttons contains hide
               btn.classList.remove('_hide'); // delate it all
            }
         })
      }
   }
   //====================================KEYBOARD============================
   window.addEventListener('keydown', (e) => { // listen a keyboard 
      if (lightboxContainer.classList.contains('_active')) { // if container has active 
         if (e.key.includes('Left')) { // if cliked button is left 
            //=========================false the loop
            if (activeElement === 0) {
               e.preventDefault();
            }
            //====================================== 
            else {
               transitionSlideLeft() // execute a function of slide to left 
            }
         } else if (e.key.includes('Right')) {// if cliked button is right
            //=========================false the loop
            if (activeElement === lastElementArray) {
               e.preventDefault();
            }
            //====================================== 
            else {
               transitionSlideRight() // execute a function of slide to right 
            }
         } else if (e.key.includes('Escape')) {
            removeLightbox();
         } else if (e.key.includes('')) { // space listen
            if (activeElement === lastElementArray) {
               e.preventDefault();
            }
            //====================================== 
            else {
               transitionSlideRight() // execute a function of slide to right 
            }
         }
      }
   })

}
//
//RUlES:
// 1. don't forget about body lock js (also read rules about it)
// 2. don't forget avout css properties of Lightbox 
// 3. to make it work create the html construction:
               //  <div class="lightbox">
               //      <div class="lighbox-wrapper">
               //          <div class="lightbox-image-wrapper IEimg">
               //            <img class="lightbox-image" src="" alt="">
               //           </div>
               //          <div class="lightbox-navigations">
               //             <button class="lightbox-button lightbox-button-left"></button>
               //             <button class="lightbox-button lightbox-button-right"></button>
               //          </div>
               //     </div>
               //  </div>
// 4. also add class="lightbox-enabled" to and div block in which is image like this: 
//                  <div class="photo lightbox-enabled IEimg">
// 				         <img src="img/massacre-of-the-innocents-1.jpeg" alt="">
// 			         </div>
// 5. photo src path shouldn't contain spacebar 
////==========================================================================================
////==========================================================================================
