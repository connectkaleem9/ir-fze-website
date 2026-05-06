/* ================================================================
   IR-FZE GLOBAL JAVASCRIPT
   Navigation · WhatsApp FAB · Scroll Reveal · Counters · Stat Bars
   ================================================================ */

(function () {
  'use strict';

  /* ── Dynamic year ── */
  document.querySelectorAll('.js-year').forEach(el => {
    el.textContent = new Date().getFullYear();
  });

  /* ── Navbar: scroll shadow + dark mode ── */
  const navbar = document.getElementById('navbar');
  if (navbar) {
    const onScroll = () => {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── Hamburger menu ── */
  const hamburger = document.getElementById('hamburger');
  const drawer    = document.getElementById('mobile-drawer');
  if (hamburger && drawer) {
    hamburger.addEventListener('click', () => {
      const open = hamburger.classList.toggle('open');
      drawer.classList.toggle('open', open);
      hamburger.setAttribute('aria-expanded', open);
      document.body.style.overflow = open ? 'hidden' : '';
    });
    drawer.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        hamburger.classList.remove('open');
        drawer.classList.remove('open');
        hamburger.setAttribute('aria-expanded', false);
        document.body.style.overflow = '';
      });
    });
  }

  /* ── Mega menu: keyboard + touch toggle ── */
  document.querySelectorAll('.nav-item.has-mega').forEach(item => {
    const toggle = item.querySelector('.nav-link');
    if (!toggle) return;
    toggle.addEventListener('click', e => {
      e.preventDefault();
      const open = item.classList.toggle('open');
      // close siblings
      document.querySelectorAll('.nav-item.has-mega').forEach(other => {
        if (other !== item) other.classList.remove('open');
      });
    });
  });
  document.addEventListener('click', e => {
    if (!e.target.closest('.nav-item.has-mega')) {
      document.querySelectorAll('.nav-item.has-mega').forEach(i => i.classList.remove('open'));
    }
  });

  /* ── Active nav link ── */
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link[href]').forEach(a => {
    const href = a.getAttribute('href').split('/').pop();
    if (href === currentPath || (currentPath === '' && href === 'index.html')) {
      a.classList.add('active');
    }
  });

  /* ── Scroll Reveal (IntersectionObserver) ── */
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        revealObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale')
    .forEach(el => revealObs.observe(el));

  /* ── Animated number counters ── */
  function easeOut(t) { return 1 - Math.pow(1 - t, 3); }

  function animateCounter(el) {
    const target   = parseFloat(el.dataset.target);
    const decimals = el.dataset.decimals ? parseInt(el.dataset.decimals) : 0;
    const suffix   = el.dataset.suffix || '';
    const prefix   = el.dataset.prefix || '';
    const duration = 1800;
    let start = null;

    const tick = (ts) => {
      if (!start) start = ts;
      const progress = Math.min((ts - start) / duration, 1);
      const val      = easeOut(progress) * target;
      el.textContent = prefix + val.toFixed(decimals) + suffix;
      if (progress < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  }

  const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        animateCounter(e.target);
        counterObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.4 });

  document.querySelectorAll('[data-target]').forEach(el => counterObs.observe(el));

  /* ── Animated stat progress bars ── */
  const barObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const fill = e.target.querySelector('.stat-bar-fill');
        if (fill) {
          const pct = fill.dataset.width || '0';
          setTimeout(() => { fill.style.width = pct + '%'; }, 200);
        }
        barObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.stat-bar').forEach(el => barObs.observe(el));

  /* ── Smooth scroll for anchor links ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = parseInt(getComputedStyle(document.documentElement)
          .getPropertyValue('--nav-h')) || 76;
        const top = target.getBoundingClientRect().top + window.scrollY - offset - 12;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ── Contact form validation ── */
  const form = document.getElementById('contactForm');
  const successMsg = document.getElementById('formSuccess');
  if (form) {
    const uaePhoneReg = /^(\+971|00971|0)?[\s\-]?[5][0-9][\s\-]?\d{3}[\s\-]?\d{4}$/;

    const validators = {
      'cf-name':    v => v.trim().length >= 2,
      'cf-phone':   v => uaePhoneReg.test(v.trim()),
      'cf-email':   v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()),
      'cf-service': v => v !== '',
      'cf-message': v => v.trim().length >= 10,
    };

    function validate(id) {
      const field = document.getElementById(id);
      if (!field) return true;
      const ok = validators[id](field.value);
      field.classList.toggle('error', !ok);
      return ok;
    }

    Object.keys(validators).forEach(id => {
      const f = document.getElementById(id);
      if (f) f.addEventListener('blur', () => validate(id));
    });

    form.addEventListener('submit', e => {
      e.preventDefault();
      const allOk = Object.keys(validators).map(validate).every(Boolean);
      if (!allOk) return;

      const vals = Object.fromEntries(new FormData(form));
      const body = encodeURIComponent(
        `Name: ${vals.name}\nPhone: ${vals.phone}\nEmail: ${vals.email}\n` +
        `Service: ${vals.service}\n\nMessage:\n${vals.message}`
      );
      window.location.href =
        `mailto:info@ir-fze.com?subject=Project%20Enquiry%20from%20${encodeURIComponent(vals.name)}&body=${body}`;

      if (successMsg) {
        form.style.display = 'none';
        successMsg.style.display = 'block';
      }
    });
  }

})();
