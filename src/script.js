document.addEventListener('DOMContentLoaded', function () {
  const cards = document.querySelectorAll('.member-card');

  cards.forEach(card => {
    const contact = card.querySelector('.contact-info');
    contact.style.opacity = 0;
    contact.style.transform = 'translateY(10px)';
    contact.style.transition = 'all 0.3s ease';

    card.addEventListener('mouseenter', () => {
      contact.classList.remove('d-none');
      contact.style.opacity = 1;
      contact.style.transform = 'translateY(0)';
    });

    card.addEventListener('mouseleave', () => {
      contact.style.opacity = 0;
      contact.style.transform = 'translateY(10px)';
    });
  });
});
