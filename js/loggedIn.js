// JavaScript Document

$(document).ready(function(){
if ( 768 <= $(window).width()) {
   $('ul.test').find('li#loggedIn').appendTo('ul.test');
}
});