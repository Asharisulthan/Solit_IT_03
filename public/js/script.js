// Toggle class active untuk hamburger menu
const navbarNav = document.querySelector ('.navbar-nav');

// Ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// Toggle class active untuk search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick = (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
};

// Toggle class active untuk shooping cart
const shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#shopping-cart-button').onclick = (e) => {
    shoppingCart.classList.toggle('active');
    e.preventDefault();
};

// Klik di luar elemen
const hamburger = document.querySelector('#hamburger-menu');
const searchbutton = document.querySelector('#search-button');
const shoppingcart = document.querySelector('#shopping-cart-button')

document.addEventListener('click', function(e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active')
    }

    if (!searchbutton.contains(e.target) && !searchForm.contains(e.target)) {
        searchForm.classList.remove('active')
    }

    if (!shoppingcart.contains(e.target) && !shoppingCart.contains(e.target)) {
        shoppingCart.classList.remove('active')
    }
});

// // Dropdown Menu
// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
//   }
  
//   // Close the dropdown if the user clicks outside of it
//   window.onclick = function(event) {
//     if (!event.target.matches('.dropdown .dropbtn')) {
//       var dropdowns = document.getElementsByClassName("dropdown-content");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('show')) {
//           openDropdown.classList.remove('show');
//         }
//       }
//     }
//   }


// // Modal Box 
// const itemDetailModal = document.querySelector('#item-detail-modal');
// const itemDetailButton = document.querySelector('.item-detail-button');

// itemDetailButton.onclick= (e) => {
//     itemDetailModal.style.display = 'flex';
//     e.preventDefault();
//     };

// // Klik tombol close modal
// document.querySelector('.modal .close-icon').onclick = (e) => {
//     itemDetailModal.style.display = 'none';
//     e.preventDefault();
// };

// // Klikn di luar modal 
// const modal = document.querySelector('#item-detail-modal');
// window.onclick = (e) => {
//     if (e.target === modal) {
//         modal.style.display = 'none';
//     }
// };