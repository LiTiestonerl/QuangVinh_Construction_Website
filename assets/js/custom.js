(function() {
  "use strict";

  /**
   * Ẩn top bar khi cuộn xuống.
   */
  const header = document.getElementById('header');
  let lastScrollTop = 0;

  if (header) {
    window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop && scrollTop > 80) {
        header.classList.add('hide-top-bar');
      } else {
        header.classList.remove('hide-top-bar');
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
  }

  /**
   * Xử lý click cho các icon liên hệ nổi.
   */
  const contactLinks = {
    zalo: 'https://zalo.me/0392217862',
    phone: 'tel:+0392217862',
    messenger: 'https://m.me/61556861061396'
  };

  Object.entries(contactLinks).forEach(([id, href]) => {
    const icon = document.getElementById(id);

    if (icon) {
      icon.addEventListener('click', function() {
        window.location.href = href;
      });
    }
  });

  document.querySelectorAll('.contact-icon').forEach((icon) => {
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
