document.addEventListener("DOMContentLoaded", (event) => {
   gsap.registerPlugin(ScrollTrigger)
});

document.addEventListener('DOMContentLoaded', () => {
   let accordions = document.querySelectorAll(".accordion");

   accordions.forEach(accord => {
      let title = accord.querySelector(".accordion__title");
      title.addEventListener('click', (title) => {
         toggleAccordion(accord);
      });



      function toggleAccordion(accord) {

         function getContentByAccordNode(node) {
            return node.querySelector(".accordion__content");
         }

         accordions.forEach((el, i, arr) => {

            if (accord !== el) {
               gsap.to(getContentByAccordNode(el), {
                  onStart: () => {
                    el.classList.remove('open');
                  },
                  height: 0,
               });
            }

            if (arr.length - 1 === i) {
               gsap.to(getContentByAccordNode(accord), {
                  onStart: () => {
                     accord.classList.add('open');
                  },
                  height: 'auto',
               });
            }
         });
      }
   });

});



document.addEventListener('DOMContentLoaded', () => {
   let menuOpenNode = document.querySelector('#open-menu');
   let menu = document.querySelector('#mobile-menu');

   menuOpenNode.addEventListener('click', (e) => {
      let height = menu.getBoundingClientRect().height;

      if (height) {
         gsap.to(menu, { height: 0 });
      } else {
         gsap.to(menu, { height: 'auto' });
      }
   });
});


document.addEventListener('DOMContentLoaded', () => {
   let splide = document.querySelector('.splide-collect');

   if (!!splide === false) {
      return;
   }

   const splideCollect = new Splide(splide, { type: 'fade', pagination: false }).mount();

   splideCollect.on('moved', function (newIndex) {
      setActiveTab(newIndex);
   });

   const tabs = document.querySelectorAll('.what-data-collect-tab');


   tabs.forEach(el => {
      el.addEventListener('click', (event) => {
         let tabId = parseInt(event.currentTarget.dataset.id);

         splideCollect.go(tabId);

         removeActiveClassTab();
         event.currentTarget.classList.add('active');
      })
   });

   function removeActiveClassTab() {
      tabs.forEach(el => {
         el.classList.remove('active');
      });
   }

   function getTabNodeByIndex(index) {
      return Array.from(tabs).filter(el => parseInt(el.dataset.id) === Number(index) )[0];
   }
   function setActiveTab(tabId) {
      const tab = getTabNodeByIndex(tabId);

      if (false === !!tab) {
         return false;
      }

      removeActiveClassTab();
      tab.classList.add('active');
   }

});