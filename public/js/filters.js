'use strict';

/* Filters */

var mcareFilters = angular.module('mcareFilters', [])
    .filter('replaceSemiColonWithComma',function() {
        return function(textToReplace) {
            var replacedText = textToReplace.replace(/\;/g,', ');
            return replacedText;
        }
    })
    .filter('toFixed',function(){
        return function(textToApproximate,precision){
            var approximatedFilter = textToApproximate.toFixed(precision);
            return approximatedFilter;
        }
   });
