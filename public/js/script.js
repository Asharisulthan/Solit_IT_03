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


// Modal Box 
const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailButton = document.querySelector('.item-detail-button');

itemDetailButton.onclick= (e) => {
    itemDetailModal.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal .close-icon').onclick = (e) => {
    itemDetailModal.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal = document.querySelector('#item-detail-modal');
window.onclick = (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
};


// Modal Box 2
const itemDetailModal2 = document.querySelector('#item-detail-modal2');
const itemDetailButton2 = document.querySelector('.item-detail-button2');

itemDetailButton2.onclick= (e) => {
    itemDetailModal2.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal2 .close-icon2').onclick = (e) => {
    itemDetailModal2.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal2 = document.querySelector('#item-detail-modal2');
window.onclick = (e) => {
    if (e.target === modal2) {
        modal2.style.display = 'none';
    }
};


// Modal Box 3
const itemDetailModal3 = document.querySelector('#item-detail-modal3');
const itemDetailButton3 = document.querySelector('.item-detail-button3');

itemDetailButton3.onclick= (e) => {
    itemDetailModal3.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal3 .close-icon3').onclick = (e) => {
    itemDetailModal3.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal3 = document.querySelector('#item-detail-modal3');
window.onclick = (e) => {
    if (e.target === modal3) {
        modal3.style.display = 'none';
    }
};


// Modal Box 4
const itemDetailModal4 = document.querySelector('#item-detail-modal4');
const itemDetailButton4 = document.querySelector('.item-detail-button4');

itemDetailButton4.onclick= (e) => {
    itemDetailModal4.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal4 .close-icon4').onclick = (e) => {
    itemDetailModal4.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal4 = document.querySelector('#item-detail-modal4');
window.onclick = (e) => {
    if (e.target === modal4) {
        modal4.style.display = 'none';
    }
};


// Modal Box 5
const itemDetailModal5 = document.querySelector('#item-detail-modal5');
const itemDetailButton5 = document.querySelector('.item-detail-button5');

itemDetailButton5.onclick= (e) => {
    itemDetailModal5.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal5 .close-icon5').onclick = (e) => {
    itemDetailModal5.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal5 = document.querySelector('#item-detail-modal5');
window.onclick = (e) => {
    if (e.target === modal5) {
        modal5.style.display = 'none';
    }
};


// Modal Box 6
const itemDetailModal6 = document.querySelector('#item-detail-modal6');
const itemDetailButton6 = document.querySelector('.item-detail-button6');

itemDetailButton6.onclick= (e) => {
    itemDetailModal6.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal6 .close-icon6').onclick = (e) => {
    itemDetailModal6.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal6 = document.querySelector('#item-detail-modal6');
window.onclick = (e) => {
    if (e.target === modal6) {
        modal6.style.display = 'none';
    }
};


// Modal Box 7
const itemDetailModal7 = document.querySelector('#item-detail-modal7');
const itemDetailButton7 = document.querySelector('.item-detail-button7');

itemDetailButton7.onclick= (e) => {
    itemDetailModal7.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal7 .close-icon7').onclick = (e) => {
    itemDetailModal7.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal7 = document.querySelector('#item-detail-modal7');
window.onclick = (e) => {
    if (e.target === modal7) {
        modal7.style.display = 'none';
    }
};


// Modal Box 8
const itemDetailModal8 = document.querySelector('#item-detail-modal8');
const itemDetailButton8 = document.querySelector('.item-detail-button8');

itemDetailButton8.onclick= (e) => {
    itemDetailModal8.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal8 .close-icon8').onclick = (e) => {
    itemDetailModal8.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal8 = document.querySelector('#item-detail-modal8');
window.onclick = (e) => {
    if (e.target === modal8) {
        modal8.style.display = 'none';
    }
};


// Modal Box 9
const itemDetailModal9 = document.querySelector('#item-detail-modal9');
const itemDetailButton9 = document.querySelector('.item-detail-button9');

itemDetailButton9.onclick= (e) => {
    itemDetailModal9.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal9 .close-icon9').onclick = (e) => {
    itemDetailModal9.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal9 = document.querySelector('#item-detail-modal9');
window.onclick = (e) => {
    if (e.target === modal9) {
        modal9.style.display = 'none';
    }
};


// Modal Box 10
const itemDetailModal10 = document.querySelector('#item-detail-modal10');
const itemDetailButton10 = document.querySelector('.item-detail-button10');

itemDetailButton10.onclick= (e) => {
    itemDetailModal10.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal10 .close-icon10').onclick = (e) => {
    itemDetailModal10.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal10 = document.querySelector('#item-detail-modal10');
window.onclick = (e) => {
    if (e.target === modal10) {
        modal10.style.display = 'none';
    }
};


// Modal Box 11
const itemDetailModal11 = document.querySelector('#item-detail-modal11');
const itemDetailButton11 = document.querySelector('.item-detail-button11');

itemDetailButton11.onclick= (e) => {
    itemDetailModal11.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal11 .close-icon11').onclick = (e) => {
    itemDetailModal11.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal11 = document.querySelector('#item-detail-modal11');
window.onclick = (e) => {
    if (e.target === modal11) {
        modal11.style.display = 'none';
    }
};


// Modal Box 12
const itemDetailModal12 = document.querySelector('#item-detail-modal12');
const itemDetailButton12 = document.querySelector('.item-detail-button12');

itemDetailButton12.onclick= (e) => {
    itemDetailModal12.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal12 .close-icon12').onclick = (e) => {
    itemDetailModal12.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal12 = document.querySelector('#item-detail-modal12');
window.onclick = (e) => {
    if (e.target === modal12) {
        modal12.style.display = 'none';
    }
};


// Modal Box 7
const itemDetailModal13 = document.querySelector('#item-detail-modal13');
const itemDetailButton13 = document.querySelector('.item-detail-button13');

itemDetailButton13.onclick= (e) => {
    itemDetailModal13.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal13 .close-icon13').onclick = (e) => {
    itemDetailModal13.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal13 = document.querySelector('#item-detail-modal13');
window.onclick = (e) => {
    if (e.target === modal13) {
        modal13.style.display = 'none';
    }
};


// Modal Box 14
const itemDetailModal14 = document.querySelector('#item-detail-modal14');
const itemDetailButton14 = document.querySelector('.item-detail-button14');

itemDetailButton14.onclick= (e) => {
    itemDetailModal14.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal14 .close-icon14').onclick = (e) => {
    itemDetailModal14.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal14 = document.querySelector('#item-detail-modal14');
window.onclick = (e) => {
    if (e.target === modal14) {
        modal14.style.display = 'none';
    }
};


// Modal Box 15
const itemDetailModal15 = document.querySelector('#item-detail-modal15');
const itemDetailButton15 = document.querySelector('.item-detail-button15');

itemDetailButton15.onclick= (e) => {
    itemDetailModal15.style.display = 'flex';
    e.preventDefault();
    };

// Klik tombol close modal
document.querySelector('.modal15 .close-icon15').onclick = (e) => {
    itemDetailModal15.style.display = 'none';
    e.preventDefault();
};

// Klikn di luar modal 
const modal15 = document.querySelector('#item-detail-modal15');
window.onclick = (e) => {
    if (e.target === modal15) {
        modal15.style.display = 'none';
    }
};