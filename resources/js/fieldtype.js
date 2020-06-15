/** global: Vue */

console.info('I was here');
Statamic.$components.register('extended_section-fieldtype', {
    props: ['data', 'config', 'name'],

    mounted: function () {
        console.log(this.config)
        // find container parent
        var container = this.$el.parentNode;
        while (!container.classList || !container.classList.contains('form-group')) {
            container = container.parentNode;

            if (!container) {
                break;
            }
        }

        if (container) {
            // we add the original section class to inherit all the styles
            container.classList.add('section-fieldtype');

            // and add our color
            var background = this.config.background;
            if (background) {
                container.classList.add('color-' + background);
            }
        }
    }
});
