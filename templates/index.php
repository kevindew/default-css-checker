<?php $title = 'Default CSS Checker' ?>
<!doctype html>
<html>
<head>
    <title><?php echo $title ?><?php echo $url ? " | " . htmlentities($url, ENT_QUOTES, 'UTF-8') : '' ?></title>
    <style>
        iframe#basic-page {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
            margin: auto;
            padding: 0;
        }
        section#core-selector {
            position: absolute;
            top: 0;
            background-color: transparent;
            color: #333;
            z-index: 100;
            width: 80%;
            left: 40%;
            margin-left: -30%;
            min-width: 600px;
            -webkit-transition: top 500ms linear;
            -moz-transition: top 500ms linear;
            -ms-transition: top 500ms linear;
            -o-transition: top 500ms linear;
            transition: top 500ms linear;
            font-family: Helvetica, arial, sans-serif;

        }

        section#core-selector div.body {
            background: #f7fbfc; /* Old browsers */
            /* IE9 SVG, needs conditional override of 'filter' to 'none' */
            background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y3ZmJmYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQwJSIgc3RvcC1jb2xvcj0iI2Q5ZWRmMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNhZGQ5ZTQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
            background: -moz-linear-gradient(top, #f7fbfc 0%, #d9edf2 40%, #add9e4 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7fbfc), color-stop(40%,#d9edf2), color-stop(100%,#add9e4)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #f7fbfc 0%,#d9edf2 40%,#add9e4 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #f7fbfc 0%,#d9edf2 40%,#add9e4 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #f7fbfc 0%,#d9edf2 40%,#add9e4 100%); /* IE10+ */
            background: linear-gradient(top, #f7fbfc 0%,#d9edf2 40%,#add9e4 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7fbfc', endColorstr='#add9e4',GradientType=0 ); /* IE6-8 */
            padding: 1%;
            -webkit-border-radius: 0 0 0 10px;
            border-radius: 0 0 0 10px;
            -webkit-box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.3);
        }

        section#core-selector h1 {
            text-align: center;
        }

        section#core-selector label {
            margin-top: 0.5em;
            display: block;
        }

        section#core-selector input,
        section#core-selector textarea {
            font-family: monospace;
            font-size: 1em;
        }

        section#core-selector button {
            display: inline-block;
            width: 5%;
        }

        section#core-selector input#url {
            width: 94%;
        }

        section#core-selector input {
            width: 100%;
        }

        section#core-selector textarea {
            width: 100%;
            height: 100%;
            min-height: 300px;
        }

        section#core-selector p#load-status {
            padding: 0;
            margin:5px 0 0;
        }

        section#core-selector p#load-status.loading {
            color: #666;
            font-style: italic;
        }

        section#core-selector p#load-status.error {
            color: #EE0000;
        }

        section#core-selector #css-tab {
            float: right;
            cursor: pointer;
            background-color: #add9e4;
            padding: 16px 16px 5px;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
            -webkit-box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.3);
        }


    </style>
</head>
<body>
<section id="core-selector">
    <div class="body">
        <header>
            <h1><?php echo $title ?></h1>
        </header>
        <label for="url">URL</label>
        <input id="url" type="text" value="<?php echo htmlentities($url, ENT_QUOTES, 'UTF-8') ?>" />
        <button id="load-url">Load</button>
        <label for="base">Base Href</label>
        <input id="base" type="text" value="<?php echo htmlentities($base, ENT_QUOTES, 'UTF-8') ?>" />
        <label for="html">HTML</label>
        <textarea id="html"><?php echo htmlentities($html, ENT_QUOTES, 'UTF-8') ?></textarea>
    </div>
    <div id="css-tab">
        CSS Selector
    </div>
</section>
<iframe id="basic-page" src="html5.html"></iframe>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
    !function($, history) {
        "use strict"

        var urlAjax, baseTimeout, htmlTimeout, linksToLoad = 0, linksLoadedSuccessfully = 0, linksLoadedErrors = 0;
        function loadUrl(url, userTriggered) {

            if (urlAjax) {
                urlAjax.abort();
            }
            $("#load-status").remove();
            $('<p id="load-status" class="loading">Loading...</p>').insertAfter($("#load-url"));
            $("#base, #html").attr("disabled", true);

            urlAjax = $.ajax("./", {
                data: {url: url},
                dataType: "json",
                type: "POST",
                success: function(data, textStatus, jqXHR) {
                    $("#base, #html").attr("disabled", false);
                    $("#base").val(data.base);
                    var elementsString = data.elements.join("");
                    $("#html").val(elementsString);
                    changeBaseOrHtml();
                    $("#load-status").remove();
                    if (userTriggered) {
                        showHideCoreSelector();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $("#base, #html").attr("disabled", false);
                    $("#load-status").remove();
                    $('<p id="load-status" class="error">Error, please check or try a different url</p>').insertAfter($("#load-url"));
                }
            });
        }

        function showHideCoreSelector() {
            var $coreSelector = $("#core-selector");

            if ($coreSelector.hasClass("out-of-view")) {
                $coreSelector.css("top", 0);
                $coreSelector.removeClass("out-of-view")
            } else {
                $coreSelector.css("top", ($coreSelector.find(".body").outerHeight() + 11) * -1);
                $coreSelector.addClass("out-of-view")

            }
        }

        function changeBaseOrHtml() {
            clearTimeout(baseTimeout);
            clearTimeout(htmlTimeout);
            var $head = $("iframe#basic-page").contents().find("head").first();
            var $base = $head.find("base").first();
            $base.nextAll().remove();

            var baseInputVal = $.trim($("#base").val());
            if (baseInputVal != $base.attr("href")) {
                $("#base").val(baseInputVal);
                $base.attr("href", baseInputVal);
            }
            $head.append($("#html").val());

            var $links = $base.nextAll().filter("link");
            linksToLoad = $links.length;
            linksLoadedErrors = 0;
            linksLoadedSuccessfully = 0;

            function loadedStylesheet(success) {
                if (success) {
                    linksLoadedSuccessfully++;
                } else {
                    linksLoadedErrors++;
                }

                if (linksToLoad == (linksLoadedSuccessfully + linksLoadedErrors)) {
                    $("#css-tab").removeClass("loading");
                }
            }

            $links.on("load", function(e) {
                loadedStylesheet(true);
            });

            $links.on("error", function(e) {
                loadedStylesheet(false);
            });
        }

        $("#url").on("keyup", function(e) {
            // if enter submit load
            if (e.keyCode == 13) {
                $("#load-url").trigger("click");
            }
        });

        $("#load-url").on("click", function(e) {
            var url = $("#url").val();
            if (!url) {
                return;
            }

            var title = "<?php echo $title ?> | "+ url;

            $("title").html(title);

            if (typeof history.pushState == "function") {
                history.pushState(
                    {url: url},
                    title,
                    "?url=" + encodeURIComponent(url)
                );
            }

            loadUrl(url, true);
        });

        $("#base, #html").on("change", function(e) {
            changeBaseOrHtml();

            var title = "<?php echo $title ?>";

            if (typeof history.pushState == "function") {
                history.pushState(
                    {
                        base: $("#base").val(),
                        html: $("#html").val()
                    },
                    title,
                    "?base=" + encodeURIComponent($("#base").val()) + "&html=" + encodeURIComponent($("#html").val())
                );
            }

            $("title").html(title);
        });

        $(window).on("popstate", function(e) {
            var state = e.originalEvent.state;

            if (state == null) {
                return;
            }

            $.extend({
                url: "",
                base: "",
                html: ""
            }, state);

            if (state.url) {
                $("#url").val(state.url);
                loadUrl(state.url, false);
            } else {
                $("#base").val(state.base);
                $("#html").val(state.html);
                changeBaseOrHtml();
            }
        })

        $("#base").on("keyup", function(e) {
            clearTimeout(baseTimeout);
            var $this = $(this);
            baseTimeout = setTimeout(function() {
                $this.triggerHandler("change");
            }, 1000);
        });

        $("#html").on("keyup", function(e) {
            clearTimeout(htmlTimeout);
            var $this = $(this);
            htmlTimeout = setTimeout(function() {
                $this.triggerHandler("change");
            }, 1000);
        });

        $("#css-tab").on("click", function(e) {
            showHideCoreSelector();
        });

        // init
        if ($("#url").val()) {
            loadUrl($("#url").val(), false);
        } else {
            changeBaseOrHtml();
        }

    }(window.jQuery, window.history);
</script>
</body>
</html>