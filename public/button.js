var productionFunctionality = {
    createButtons: function() {
        var form = [
            {
                type: 'anchor',
                label: 'Buy Now',
                target: '_blank'
            },
            {
                type: 'button',
                label: ''
            }
        ];

        var element = document.createElement("div");
        var wrapHtmlAttr = document.createAttribute("class");
        wrapHtmlAttr.value = "online-actions";
        element.style.cssText = "position: fixed;bottom: 43px;right: 21px;z-index: 1025;";
        element.setAttributeNode(wrapHtmlAttr);
        for (var i = 0; i < form.length; i++) {
            var obj = form[i];
            switch (obj.type) {
                case "button":
                    var button = document.createElement('button');
                    var textButton = document.createTextNode(obj.label);
                    button.innerHTML = '<svg style="width: 15px; height: 15px; stroke-width: 2; vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>';
                    button.style.cssText = " margin-left: 6px;padding: 6px 9px; display: none; border: none;box-shadow: 0 10px 20px -10px #4801FF; background-image: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);";
                    button.classList.add('btn', 'btn-secondary', 'scroll-top-btn');
                    button.appendChild(textButton);
                    element.appendChild(button);
                    break;

                case "anchor":
                    var anchor = document.createElement('a');
                    var textanchor = document.createTextNode(obj.label);
                    anchor.setAttribute('href',"");
                    anchor.style.cssText = "border: none; background-image: linear-gradient(to right, #ff0844 20%, #ffb199 141%);box-shadow: 0 10px 20px -10px #ff0844;";
                    anchor.classList.add('btn', 'btn-danger', 'buy-btn');
                    anchor.target = obj.target;
                    anchor.appendChild(textanchor);
                    element.appendChild(anchor);
                    break;
            }
            var div = document.querySelector("body");
            div.appendChild(element);
        }
    },

    scrollTop: function() {
        $(document).on('click', '.scroll-top-btn', function(event) {
            event.preventDefault();
            var body = $("html, body");
            body.stop().animate({scrollTop:0}, 500, 'swing');
        });
    },

    checkScrollPosition: function() {
        $(document).scroll(function(event) {
            var lanWrapper = $('.layout-spacing');
            var elementScrollToTop = $('.scroll-top-btn');
            var windowScroll = $(window).scrollTop()
            var elementoffset = lanWrapper.offset().top;

            // Check if window scroll > or == element offset?
            if (windowScroll >= elementoffset) {
            elementScrollToTop.addClass('d-inline-block');
            } else if (windowScroll < elementoffset) {
            elementScrollToTop.removeClass('d-inline-block');
            }
        });
    }
}
// line 200 ukitaka
