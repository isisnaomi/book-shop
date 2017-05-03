var Cart = function () {
  this.index = function () {
    return getCookieAsJSON('cart')
  }

  this.getItem = function (id) {
    let cart = getCookieAsJSON('cart')
    if (cart && cart.hasOwnProperty(id)) {
      return cart[id]
    } else {
      return null
    }
  }

  this.increaseItemAmmount = function (id) {
    let cart = getCookieAsJSON('cart')
    cart[id].ammount++
    setCookieAsJSON('cart', cart)
  }

  this.decreaseItemAmmount = function (id) {
    let cart = getCookieAsJSON('cart')
    cart[id].ammount--
    setCookieAsJSON('cart', cart)
  }

  this.setItemAmmount = function (id, itemAmmount) {
    let cart = getCookieAsJSON('cart')
    cart[id].ammount = itemAmmount
    setCookieAsJSON('cart', cart)
  }

  this.addItem = (id, item) => {
    if (this.getItem(id) === null) {
      item.ammount = 1
      addToCookie('cart', id, item)
    } else {
      this.increaseItemAmmount(id)
    }
  }

  this.removeItem = function (id) {
    removeFromCookie('cart', id)
  }
}
