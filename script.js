/* HEADER SECTION */

// Prevent clicking on disabled links
document.querySelectorAll('.disabled').forEach(function (item) {
  item.addEventListener('click', function (e) {
    e.preventDefault();
  })
});

// Dropdown
document.querySelector('.dropdown').addEventListener('click', toggleDropdown);

function toggleDropdown(e) {
  this.classList.toggle('active');
}

// Hamburger
document.querySelector('.hamburger').addEventListener('click', function (e) {
  const menu = document.querySelector('.navMenu');
  menu.classList.toggle('hidden');

  this.classList.toggle('is-active');
})

// Shy bear on mobile
// let lastY = 0;
// let windowWidth = window.innerWidth;
// const bear = document.querySelector('.headerBearPink');
//
// window.addEventListener('load', function() {
//   bear.classList.remove('hiding');
// });
//
// window.addEventListener('resize', function() {
//   windowWidth = window.innerWidth;
//   console.log('resizing to ' + windowWidth + '!');
//
//   if (!document.querySelector('.index') && windowWidth <= 660) {
//     bear.classList.remove('hiding');
//   }
// });
//
//   window.addEventListener('scroll', function() {
//     if (windowWidth <= 660) {
//     if (lastY > this.scrollY) {
//       bear.classList.add('hiding');
//     } else {
//       bear.classList.remove('hiding');
//     }
//   };
//
//   lastY = this.scrollY;
// });

// Offsetting content for header
const delay = 100;
let resizeTimer;

window.addEventListener('load', offsettingForHeader);
window.addEventListener('resize', function (e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(offsettingForHeader, delay);
});

function offsettingForHeader() {
  const content = document.querySelector('main');
  const header = document.querySelector('header');
  // console.log(header.offsetHeight);
  content.style.marginTop = `${header.offsetHeight}px`;
}

/* FOOTER SECTION */

// Play little bear animation on scroll entry
function showBear() {

  const bear = document.querySelector('.bearFooter');
  const trigger = document.querySelector('footer').offsetTop;
  const scroll = this.scrollY + this.innerHeight;

  console.log(scroll, trigger);

  if(scroll >= trigger) {
    console.log('Bear?')
    bear.style.animationPlayState = "running";
  }
};

window.addEventListener('scroll', function(e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(showBear, delay);
})

/* FORSIDE SECTION */

// Scroll products
if (document.querySelector('.products')) {
  let index = 0;
  const itemsScroll = document.querySelector('.items');

  function scrollItems(e) {
    const gap = 14;
    const itemSize = document.querySelector('.item').offsetWidth;
    const scroll = gap + itemSize + gap + itemSize;

    let productPos = [0, -1 * scroll, -2 * scroll];

    // console.log(index);
    // console.log(productPos[index]);

    itemsScroll.style.transform = `translate(${productPos[index]}px)`;
  }

  const arrows = document.querySelectorAll('.arrow');

  arrows.forEach(function (arrow) {
    arrow.addEventListener('click', function (e) {
      if (this.classList.contains('prev')) {
        switch (index) {
          case 0:
            index = 2;
            break;

          default:
            index--;
            break;
        }
      } else {
        switch (index) {
          case 2:
            index = 0;
            break;

          default:
            index++;
            break;
        }
      }

      scrollItems(e);
    })
  });

  window.addEventListener('keydown', function (e) {
    switch (e.key) {
      case 'ArrowLeft':
        switch (index) {
          case 0:
            index = 2;
            break;

          default:
            index--;
            break;
        }
        break;
      case 'ArrowRight':
        switch (index) {
          case 2:
            index = 0;
            break;

          default:
            index++;
            break;
        }
        break;
    }

    scrollItems(e);
  })
}
