"use strict";var _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},asyncGenerator=function(){function e(e){this.value=e}function t(t){function n(r,a){try{var s=t[r](a),i=s.value;i instanceof e?Promise.resolve(i.value).then(function(e){n("next",e)},function(e){n("throw",e)}):o(s.done?"return":"normal",s.value)}catch(e){o("throw",e)}}function o(e,t){switch(e){case"return":r.resolve({value:t,done:!0});break;case"throw":r.reject(t);break;default:r.resolve({value:t,done:!1})}(r=r.next)?n(r.key,r.arg):a=null}var r,a;this._invoke=function(e,t){return new Promise(function(o,s){var i={key:e,arg:t,resolve:o,reject:s,next:null};a?a=a.next=i:(r=a=i,n(e,t))})},"function"!=typeof t.return&&(this.return=void 0)}return"function"==typeof Symbol&&Symbol.asyncIterator&&(t.prototype[Symbol.asyncIterator]=function(){return this}),t.prototype.next=function(e){return this._invoke("next",e)},t.prototype.throw=function(e){return this._invoke("throw",e)},t.prototype.return=function(e){return this._invoke("return",e)},{wrap:function(e){return function(){return new t(e.apply(this,arguments))}},await:function(t){return new e(t)}}}(),classCallCheck=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),AddressAutocomplete=function(){function e(t,n){var o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;if(classCallCheck(this,e),this.element=document.querySelector(t),!this.element)throw new Error("The element you specified is not a valid element. You should attach an input using a class '.some-class' or an ID '#some-id'.");var r={types:["geocode"]};if("function"==typeof n)this.callback=n,this.options=r;else{if("object"!==(void 0===n?"undefined":_typeof(n)))throw new Error('To be able to use extra options, the type of the second parameter must be "object" and the type of the third parameter must be "function".');this.options=Object.assign({},r,n),this.callback=o}this.extractAddress=this.extractAddress.bind(this),this.getUsersLocation=this.getUsersLocation.bind(this),this.handle()}return createClass(e,[{key:"handle",value:function(){var e=this;document.addEventListener("readystatechange",function(){e.initializeAutocomplete(),e.element.addEventListener("focus",e.getUsersLocation)})}},{key:"initializeAutocomplete",value:function(){this.autocomplete=new google.maps.places.Autocomplete(this.element,this.options),this.autocomplete.addListener("place_changed",this.extractAddress)}},{key:"extractAddress",value:function(){for(var e={street_number:"short_name",route:"long_name",locality:"long_name",administrative_area_level_1:"short_name",country:"long_name",postal_code:"short_name"},t=this.autocomplete.getPlace(),n=t.address_components,o=t.formatted_address,r=t.geometry.location,a=r.lat,s=r.lng,i={streetNumber:"",streetName:"",cityName:"",stateAbbr:"",zipCode:"",coordinates:{lat:a(),lng:s()}},c=0;c<n.length;c++){var l=n[c].types[0];if(e[l])switch(l){case"street_number":i.streetNumber=n[c].long_name;break;case"route":i.streetName=n[c].long_name;break;case"locality":i.cityName=n[c].long_name;break;case"administrative_area_level_1":i.stateAbbr=n[c].short_name,i.state=n[c].long_name;break;case"postal_code":i.zipCode=n[c].long_name;break;case"country":i.countryAbbr=n[c].short_name,i.country=n[c].long_name}}var u=Object.assign({},i,{formattedAddress:o});this.callback(u,t)}},{key:"getUsersLocation",value:function(){var e=this;navigator.geolocation&&navigator.geolocation.getCurrentPosition(function(t){var n={lat:t.coords.latitude,lng:t.coords.longitude},o=new google.maps.Circle({center:n,radius:t.coords.accuracy});e.autocomplete.setBounds(o.getBounds())})}}]),e}();module.exports=AddressAutocomplete;
//# sourceMappingURL=index.js.map