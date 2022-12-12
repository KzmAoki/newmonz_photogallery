import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';
const photoswipe = new PhotoSwipeLightbox({
  gallery: '#my-gallery',
  children: 'a',
  showHideAnimationType: 'fade',
  pswpModule: () => import('photoswipe')
});
photoswipe.init();
window.addEventListener('load', () => {
  document.querySelectorAll('#my-gallery a').forEach(elem => {
    const img = new Image()
    img.src = elem.href
    elem.dataset.pswpWidth = img.width
    elem.dataset.pswpHeight = img.height
  })
})