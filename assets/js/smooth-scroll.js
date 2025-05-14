(function () {
    const scrollSpeed = 60; // quanto maior, mais rápido
    const smoothness = 12;  // quanto maior, mais suave
    let currentScroll = window.scrollY;
    let targetScroll = window.scrollY;
    let isScrolling = false;

    window.addEventListener('wheel', function (e) {
      e.preventDefault();
      const delta = -e.deltaY;
      targetScroll += -delta * scrollSpeed / 100;
      targetScroll = Math.max(0, Math.min(document.body.scrollHeight - window.innerHeight, targetScroll));

      if (!isScrolling) {
        isScrolling = true;
        smoothScroll();
      }
    }, { passive: false });

    function smoothScroll() {
      currentScroll += (targetScroll - currentScroll) / smoothness;
      window.scrollTo(0, currentScroll);

      if (Math.abs(targetScroll - currentScroll) > 0.5) {
        requestAnimationFrame(smoothScroll);
      } else {
        isScrolling = false;
      }
    }
})();

