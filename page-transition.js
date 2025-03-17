// Po załadowaniu strony wykonaj animację wejścia
window.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.page-content').classList.add('fade-in');
  });
  
  // Dodanie efektu opuszczenia strony po kliknięciu linka
  document.querySelectorAll('a.nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault(); // Blokuj natychmiastowe przeładowanie
      const href = this.getAttribute('href');
      
      // Animacja wyjścia
      document.querySelector('.page-content').classList.remove('fade-in');
      document.querySelector('.page-content').classList.add('fade-out');
      
      // Po zakończeniu animacji (0.5s) przejdź do nowej strony
      setTimeout(() => {
        window.location.href = href;
      }, 500);
    });
  });
  