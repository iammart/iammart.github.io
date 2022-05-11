
import './homepage.anim'

;(function () {

  return;

  let elements = document.querySelectorAll('.playground-list img')

  if (elements) {

    let items = [];

    elements.forEach((element, idx) => {
      items.push({
        src: element.src,
        href: element.parentNode.href,
      })
    })

    items = items.sort(() => Math.random() - 0.5)

    elements.forEach((element, idx) => {
      element.src = items[idx].src
      element.parentNode.href = items[idx].href
    })

  }

  // const columnWidths = [
  //   'w-1/3 md:w-3/8 xl:w-2/12',
  //   'w-1/3 md:w-2/8 xl:w-3/12',
  //   'w-1/3 md:w-1/8 xl:w-2/12',
  //   'w-1/3 md:w-2/8 xl:w-2/12',
  //   'w-1/3 md:w-4/8 xl:w-3/12',
  //   'w-1/3 md:w-4/8 xl:w-3/12',
  // ].sort(() => Math.random() - 0.5)

  // let elements = document.querySelector('.playground-list')

  // if (elements) {
  //   ;[].forEach.call(elements.children, (element, idx) => {
  //     const items = columnWidths[idx].split(' ')
  //     items.forEach(size => {
  //       element.classList.add(size)
  //     })
  //   })
  // }
})()
