<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_001815ce06a266212c8f762a5f9a5ac9270dde454c5fe92a628b7e7dbb3f555f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  42 => 12,  30 => 5,  26 => 3,  65 => 24,  57 => 18,  48 => 13,  46 => 14,  41 => 11,  37 => 9,  35 => 8,  32 => 6,  27 => 4,  24 => 2,  22 => 2,  19 => 1,  643 => 287,  635 => 462,  601 => 431,  589 => 422,  585 => 421,  581 => 420,  577 => 419,  573 => 418,  569 => 417,  565 => 416,  561 => 415,  557 => 414,  553 => 413,  549 => 412,  545 => 411,  541 => 410,  520 => 392,  429 => 304,  411 => 288,  409 => 287,  336 => 217,  329 => 213,  325 => 212,  321 => 211,  317 => 210,  310 => 208,  297 => 198,  292 => 196,  281 => 188,  277 => 187,  273 => 186,  265 => 181,  261 => 180,  257 => 179,  252 => 177,  242 => 170,  227 => 158,  223 => 157,  214 => 151,  205 => 144,  191 => 133,  184 => 128,  170 => 117,  165 => 115,  161 => 114,  152 => 107,  150 => 106,  140 => 99,  119 => 83,  99 => 66,  93 => 63,  89 => 62,  85 => 61,  81 => 60,  20 => 1,  231 => 150,  220 => 146,  216 => 145,  203 => 135,  199 => 134,  190 => 128,  181 => 124,  90 => 36,  78 => 26,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
