(() => {
  const swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 1,
    slidesPerGroup: 1,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

    // burger 
    const $burger = document.querySelector('.burger');
    const $btn = document.querySelector('.header__burger');
    
    $btn.addEventListener('click', function(e) {
        e.preventDefault();

        if (!$burger.classList.contains('active')) {
            $btn.innerHTML = `
                <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="27.1628" width="37" height="4" transform="rotate(-45 0 27.1628)" fill="#1FA181"/>
                <rect x="2.83276" y="0.504395" width="37" height="4" transform="rotate(45 2.83276 0.504395)" fill="#1FA181"/>
                </svg>
            `;
        } else {
            $btn.innerHTML = `
                <svg width="37" height="26" viewBox="0 0 37 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="37" height="4" fill="#1FA181"/>
                <rect y="11" width="37" height="4" fill="#1FA181"/>
                <rect y="22" width="37" height="4" fill="#1FA181"/>
                </svg>
            `;
        }

        $burger.classList.toggle('active');
    })

    // запись на прием
    const $modalBtn = document.querySelector('.header__btn'),
          $modal = document.querySelector('.modal'),
          $closeModal = document.querySelector('.modal__cross'),
          $overlay = document.getElementById('overlay-modal'),
          $form = document.querySelector('.modal__form');
    
    const $telInput = $form.querySelector('.modal__telephone');

    $modalBtn.addEventListener('click', function(e) {
        e.preventDefault();

        $modal.classList.add('activeModal');
        $overlay.classList.add('activeModal');
        document.body.style = "overflow: hidden;";
    })

    $closeModal.addEventListener('click', function(e) {
        e.preventDefault();

        $modal.classList.remove('activeModal');
        $overlay.classList.remove('activeModal');
        document.body.style = "overflow: auto;";
    })

    const inputMask = new Inputmask('+7 (999) 999-99-99'); // импортируем маску телефона для соответствующих инпутов
    inputMask.mask($telInput);
})();
