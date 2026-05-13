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
   * Khởi tạo EmailJS (nếu có).
   */
  if (typeof emailjs !== 'undefined') {
    emailjs.init('AbFjZ__eNeooZGyIm');
  }

  /**
   * Xử lý form báo giá (nếu có).
   */
  const quoteForm = document.getElementById('quote-form');

  if (quoteForm) {
    quoteForm.addEventListener('submit', function(event) {
      event.preventDefault();

      if (typeof emailjs === 'undefined') {
        alert('Không thể tải dịch vụ gửi email, vui lòng thử lại sau.');
        return;
      }

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
