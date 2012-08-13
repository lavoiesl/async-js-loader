(function () {
    var new_tag, base_tag = document.getElementsByTagName('script')[0];

    function loadScript(id, src, delay) {
        if (!document.getElementById(id)) {
            setTimeout(function () {
                new_tag = document.createElement('script');
                new_tag.id = id;
                new_tag.src = src;
                base_tag.parentNode.insertBefore(new_tag, base_tag);
            }, delay);
        }
    }
    loadScript('twitter-wjs', '//platform.twitter.com/widgets.js', 400);
    loadScript('facebook-jssdk', '//connect.facebook.net/en_US/all.js#xfbml=1', 400);
})();