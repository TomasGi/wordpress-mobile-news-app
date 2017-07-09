document.addEventListener('DOMContentLoaded', function () {


  // ======================= main menu start
  const button = document.querySelector('.menu-button span')
  const navigation = document.querySelector('.main-menu nav')
  const mainNav = document.querySelector('.nav')
  const outOfMenu = document.querySelector('.backgroud-button')
  const blurMenu = document.querySelector('.content-news')
  const menuItems = document.querySelectorAll('.category-list li')
  const menuItem = Array.from(document.querySelectorAll('.category-list li a'))
  let toggledMenu = false

  function toggleClass() {
    console.log('toggling classes')
    button.classList.toggle('run')
    navigation.classList.toggle('run')
    mainNav.classList.toggle('run')
    outOfMenu.classList.toggle('run')
    blurMenu.classList.toggle('run')
  }

  menuItems.forEach(menuItem => menuItem.addEventListener('click', function () {
    console.log('clicked menu item')
    if (toggledMenu) {
      toggledMenu = false
      header.classList.toggle('slideDown')
      toggleClass()
    }
  }))

  outOfMenu.addEventListener('click', function () {
    console.log('clicked background')
    if (toggledMenu) {
      toggledMenu = false
      header.classList.toggle('slideDown')
      toggleClass()
    }
  })

  button.addEventListener('click', function () {
    console.log('clicked button')
    toggledMenu = true
    header.classList.toggle('slideDown')
    if (button.classList.contains('run')) {
      toggledMenu = false
      toggleClass()
    } else {
      toggleClass()
    }
  })
  // ======================= main menu end


  // ======================= side menus start
  const buttonTopNews = document.querySelector('.top-news')
  const buttonLiveNews = document.querySelector('.live-news')
  const topNewsUnderline = document.querySelector('.top-news a')
  const liveNewsUnderline = document.querySelector('.live-news a')
  let firstMenuActive = false

  buttonTopNews.addEventListener('click', function () {
    if (firstMenuActive) {
      firstMenuActive = false
      topNewsUnderline.classList.toggle('active')
      liveNewsUnderline.classList.toggle('active')
    } else {
      return
    }
  })

  buttonLiveNews.addEventListener('click', function () {
    if (!firstMenuActive) {
      firstMenuActive = true
      topNewsUnderline.classList.toggle('active')
      liveNewsUnderline.classList.toggle('active')
    } else {
      return
    }
  })
  // ======================= side menus end

  // ======================= swipe start
  // document.addEventListener('DOMContentLoaded', function () {
  //   var container = document.getElementById('all-news')
  //   // var page = document.querySelector(`a[data-page="${e.keyCode}"]`)
  //   dragend = new Dragend(container, {
  //     afterInitialize: function () {
  //       container.style.visibility = 'visible'
  //     }
  //   })


  //   menuItems.forEach(menuItem => menuItem.addEventListener('click', (e) => {
  //     //var page = this.getAttribute('data-page')
  //     console.log('clicked menu item')
  //     console.log(e)
  //     if (toggledMenu) {
  //       toggledMenu = false
  //       header.classList.toggle('slideDown')
  //       toggleClass()
  //     }
  //      container.dragend({ scrollToPage: 2 })
  //      page.classList.toggle('active')
  //   }))


  // })
  // ======================= swipe end

  // ======================= hide header start
  var header = document.querySelector('header')
  var headroom = new Headroom(header, {
    'offset': 25,
    'tolerance': 10,
    'classes': {
      'initial': 'animated',
      'pinned': 'slideDown',
      'unpinned': 'slideUp',
      'preventDrag': 'true'
    }
  })
  headroom.init()
  headroom.destroy()
  // ======================= hide header end

  // ======================= modal start
  $(".iframe").colorbox({ iframe: true, width: "100%", height: "101%", close: '<i class="material-icons">keyboard_backspace</i>' });

  // ======================= modal end
}, false)