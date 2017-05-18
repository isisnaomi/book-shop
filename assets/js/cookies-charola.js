/**
 * Project: cookies-charola
 * Author: codeams@gmail.com, github/codeams
 * License: MIT
 * Version: 0.1
 */

function getCookies () {
  let cookies = {}
  let cookiesAsStrings = document.cookie.split(';')

  cookiesAsStrings.forEach(function (cookieAsString) {
    var key = cookieAsString.split('=')[0].trim()
    var val = cookieAsString.split('=')[1].trim()

    cookies[key] = val
  })

  return cookies
}

function getCookie (cookieName) {
  let cookies = getCookies()

  return cookies[cookieName]
}

function getCookieAsJSON (cookieName) {
  let cookie = getCookie(cookieName)
  if (cookie !== '' && typeof cookie !== 'undefined' && cookie !== undefined) {
    return JSON.parse(cookie)
  } else {
    return null
  }
}

function setCookie (cookieName, cookieVal) {
  document.cookie = cookieName + '=' + cookieVal
}

function setCookieAsJSON (cookieName, cookieVal) {
  cookieVal = JSON.stringify(cookieVal)
  setCookie(cookieName, cookieVal)
}

function unsetCookie (cookieName) {
  document.cookie = ''
}

function addToCookie (cookieName, key, val) {
  let cookie = getCookie(cookieName)

  if (cookie) {
   cookie = JSON.parse(cookie)
   cookie[key] = val
   setCookie(cookieName, JSON.stringify(cookie))
  } else {
    let newCookie = {}
    newCookie[key] = val
    setCookie(cookieName, JSON.stringify(newCookie))
  }
}

function removeFromCookie (cookieName, key) {
  let cookie = getCookie(cookieName)

  if (cookie) {
    cookie = JSON.parse(cookie)
    delete cookie[key]
    setCookie(cookieName, JSON.stringify(cookie))
  }
}

// let cart = new Cart()
//
// cart.addItem(1, {
//   title: 'Uno',
//   price: 189.22,
//   desc: 'asdadsa as das da sd asd a  asd asd asd'
// })
//
// cart.addItem(2, {
//   title: 'Dos',
//   price: 189.22,
//   desc: 'asdadsa as das da sd asd a  asd asd asd'
// })
//
// cart.addItem(3, {
//   title: 'Tres',
//   price: 189.22,
//   desc: 'asdadsa as das da sd asd a  asd asd asd'
// })
//
// cart.removeItem(1)
