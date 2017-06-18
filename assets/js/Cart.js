var Cart = function () {
  this.index = function () {
    return getCookieAsJSON('equipo2_cart')
  }

  this.getItem = function (id) {
    let cart = getCookieAsJSON('equipo2_cart')
    if (cart && cart.hasOwnProperty(id)) {
      return cart[id]
    } else {
      return null
    }
  }

  this.increaseItemAmmount = function (id) {
    let cart = getCookieAsJSON('equipo2_cart')
    cart[id].ammount++
    setCookieAsJSON('equipo2_cart', cart)
  }

  this.decreaseItemAmmount = function (id) {
    let cart = getCookieAsJSON('equipo2_cart')
    cart[id].ammount--
    setCookieAsJSON('equipo2_cart', cart)
  }

  this.setItemAmmount = function (id, itemAmmount) {
    let cart = getCookieAsJSON('equipo2_cart')
    cart[id].ammount = itemAmmount
    setCookieAsJSON('equipo2_cart', cart)
  }

  this.addItem = (id, item) => {
    if (this.getItem(id) === null) {
      item.ammount = 1
      addToCookie('equipo2_cart', id, item)
    } else {
      this.increaseItemAmmount(id)
    }
  }

  this.removeItem = function (id) {
    removeFromCookie('equipo2_cart', id)
  }
}
