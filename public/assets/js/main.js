/*
* Elements
* */
document.addEventListener('DOMContentLoaded', () => {
   // let el = document.querySelector('.what-data-collect-content.active');
   //
   // gsap.to(el, { duration: 1, opacity: 0, y: -50, onComplete: () => {
   //       el.style.display = 'none'; // Скрыть элемент после анимации
   // }});

   let whatDataCollectTabs = document.querySelectorAll('.what-data-collect .what-data-collect-tab');
   let whatDataCollectContent = document.querySelectorAll('.what-data-collect .what-data-collect-content');


   // const observer = new MutationObserver((e) => { console.log(e); });
   // observer.observe(document.querySelector('.what-data-collect-content-wrapper'), { attributes: true, childList: true, subtree: true });

   function removeActiveClassOnCurrentTab() { // Чистим активные классы
      whatDataCollectTabs.forEach(el => {
         el.classList.remove('active');
      });
   }

   function addActiveClassOnTab(id) {
      whatDataCollectTabs.forEach(el => {
         if (el.dataset.id == id ) {
            el.classList.add('active');
         }
      });
   }

   function getActiveContentNode() {
      let filtered = Array.from(whatDataCollectContent).filter(el => { return el.classList.contains('active') });

      if (filtered.length) {
         return filtered[0];
      } else {
         return null;
      }
   }

   function getContentNodeById(id) {
      let filtered = Array.from(whatDataCollectContent).filter(el => { return el.dataset.contentId === id; });

      if (filtered.length) {
         return filtered[0];
      } else {
         return null;
      }
   }

   function setActiveContent(id) {
      const contentNode = getContentNodeById(id);
      const activeContentNode = getActiveContentNode();
      const duration = 0.2;

      activeContentNode.parentNode.style.minHeight = activeContentNode.getBoundingClientRect().height + 'px';

      if (activeContentNode) {
         gsap.to(activeContentNode, {
            duration: duration,
            opacity: 0,
            y: -50,
            onComplete: () => {
               activeContentNode.classList.remove('active');

               if (contentNode) {
                  gsap.fromTo(contentNode, {
                     opacity: 0,
                     display: 'none',
                     y: -50
                  }, {
                     opacity: 1,
                     display: 'block',
                     y: 0,
                     onComplete: () => {
                        contentNode.classList.add('active');
                     }
                  });
               }
            },
            onStart: () => {
               removeActiveClassOnCurrentTab();
               addActiveClassOnTab(id);
            }
         });
      }
   }



   whatDataCollectTabs.forEach(el => {

      el.addEventListener('click', function () {
         let id = this.dataset.id;

         setActiveContent(id);

      });

   })
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