(function ($) {
    var each = function (array, callback, scope) {
        for (var key in array) {
            if (array.hasOwnProperty(key)) {
                callback.call(scope, array[key], key);
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        // find publish container
        var publishFields = document.querySelector('#publish-fields');
        if (!publishFields) {
            return;
        }

        var checkInit = function () {
            if (publishFields.querySelectorAll('.form-group').length > 0) {
                clearInterval(interval);
                initSections();
            }
        }

        var initSections = function () {
            var sections = publishFields.querySelectorAll('.form-group.section-fieldtype')
            each(sections, prepareSection);
        };

        var prepareSection = function (section) {
            // wrap content
            $(section).nextUntil('.section-fieldtype').wrapAll('<div class="section-content publish-fields"></div>')
            var content = section.nextSibling

            section.addEventListener('click', function () {
                $(content).slideToggle();
            });
        }

        // check if the fields are already loaded in an interval
        var interval = setInterval(checkInit, 1000);
        checkInit();

        // break the interval if after max 5s
        setTimeout(function () {
            clearInterval(interval)
        }, 5000);
    })
})(jQuery);
