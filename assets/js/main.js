(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToggle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToggle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToggle();
      }
    });
  }); // <-- Đã đóng forEach đúng cách

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }

  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  // ==================== CÁC BỔ SUNG CẢI THIỆN UX/UI ====================

  /**
   * Ẩn top bar khi cuộn xuống
   */
  const header = document.getElementById('header');
  let lastScrollTop = 0;
  window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop && scrollTop > 80) {
      header.classList.add('hide-top-bar');
    } else {
      header.classList.remove('hide-top-bar');
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });

  /**
   * Khởi tạo EmailJS (nếu có)
   */
  if (typeof emailjs !== 'undefined') {
    emailjs.init('AbFjZ__eNeooZGyIm');
  }

  /**
   * Xử lý form báo giá (nếu có)
   */
  const quoteForm = document.getElementById('quote-form');
  if (quoteForm) {
    quoteForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const btn = this.querySelector('button[type="submit"]');
      const loading = this.querySelector('.loading');
      if (loading) loading.style.display = 'block';
      if (btn) btn.disabled = true;

      emailjs.sendForm('service_3xj2jyt', 'template_32t9m5l', this)
        .then(() => {
          alert('Yêu cầu báo giá đã được gửi thành công!');
          this.reset();
        })
        .catch((error) => {
          console.error('EmailJS error:', error);
          alert('Đã xảy ra lỗi, vui lòng thử lại.');
        })
        .finally(() => {
          if (loading) loading.style.display = 'none';
          if (btn) btn.disabled = false;
        });
    });
  }

  /**
   * Xử lý click cho các icon liên hệ nổi
   */
  const zaloIcon = document.getElementById('zalo');
  const phoneIcon = document.getElementById('phone');
  const messengerIcon = document.getElementById('messenger');

  if (zaloIcon) {
    zaloIcon.addEventListener('click', function() {
      window.location.href = 'https://zalo.me/0392217862';
    });
  }

  if (phoneIcon) {
    phoneIcon.addEventListener('click', function() {
      window.location.href = 'tel:+0392217862';
    });
  }

  if (messengerIcon) {
    messengerIcon.addEventListener('click', function() {
      window.location.href = 'https://m.me/61556861061396';
    });
  }

  document.querySelectorAll('.contact-icon').forEach(icon => {
    const info = icon.querySelector('.contact-info');
    if (info) {
      icon.addEventListener('mouseenter', () => {
        info.style.display = 'block';
      });
      icon.addEventListener('mouseleave', () => {
        info.style.display = 'none';
      });
    }
  });

})();

document.addEventListener('DOMContentLoaded', function() {
  const logoImg = document.querySelector('.logo img');
  if (logoImg) {
    logoImg.onerror = function() {
      this.style.display = 'none';
      const fallback = document.createElement('span');
      fallback.className = 'logo-fallback';
      fallback.textContent = 'QUANG VINH';
      fallback.style.cssText = 'font-size: 24px; font-weight: 700; color: #feb900; background: rgba(0,0,0,0.5); padding: 5px 15px; border-radius: 30px;';
      this.parentNode.appendChild(fallback);
    };
  }

  const footerLogo = document.querySelector('.footer-logo');
  if (footerLogo) {
    footerLogo.onerror = function() {
      this.style.display = 'none';
      const fallback = document.createElement('span');
      fallback.className = 'footer-logo-fallback';
      fallback.textContent = 'QUANG VINH';
      fallback.style.cssText = 'font-size: 22px; font-weight: 700; color: #feb900; margin-bottom: 15px; display: inline-block;';
      this.parentNode.insertBefore(fallback, this.parentNode.firstChild);
    };
  }
});