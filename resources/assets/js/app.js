
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Mixitup = require('mixitup');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));


var pathname = window.location.pathname;
if(pathname == '/locations'){
  var offersList = $('#offers_list');
  var mixer = Mixitup(offersList, {
      selectors: {
          control: '[data-mixitup-control]'
      }
  });

  let url = window.location.href;
  if(url.indexOf('filter') != -1){
    let splitted = url.split("=")
    mixer.filter('.'+splitted[1]);
  }else {
    mixer.filter('all');
  }
}

window.setTimeout(function(){
      $("#alert-message").fadeOut(500);
},2000)


$("input[name$='offre']").click(function() {
    var test = $(this).val();

    console.log(test);
});
