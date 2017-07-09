const buttonNews = document.querySelector('.button')
const menu = document.querySelector('.menu')
const background = document.querySelector('.background')
const menuItemsNews = document.querySelector('.menu ul')
let menuOpen = false

function toggleClasses() {
  console.log('toggling classes')
  buttonNews.classList.toggle('clicked')
  menu.classList.toggle('clicked')
  background.classList.toggle('clicked')
}

background.addEventListener(('touchstart'), function () {
  if (menuOpen) {
    menuOpen = false
    toggleClasses()
  }
})

background.addEventListener(('mousewheel'), function () {
  if (menuOpen) {
    menuOpen = false
    toggleClasses()
  }
})

menuItemsNews.addEventListener('click', function () {
  menuOpen = false
  toggleClasses()
})

background.addEventListener('click', function () {
  menuOpen = false
  toggleClasses()
})

buttonNews.addEventListener('click', function () {
  menuOpen = true
  toggleClasses()
})

// ========= hide button
var headroom = new Headroom(buttonNews, {
  'offset': 25,
  'tolerance': 10,
  'classes': {
    'initial': 'animated',
    'pinned': '',
    'unpinned': 'clicked',
    'preventDrag': 'true'
  }
})

headroom.init()
headroom.destroy()
