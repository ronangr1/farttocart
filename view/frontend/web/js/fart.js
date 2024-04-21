define(['jquery', 'domReady!'], function ($) {
    'use strict';

    return function (config) {
        if (typeof config.fart !== 'undefined') {
            $('#product-addtocart-button').click(function () {
                const fart = config.fart
                const fartSound = new Audio(fart)
                fartSound.play()
            })
        }
    }
})
