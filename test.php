<html>
<head>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>
        function preloadImages() {
            var images = [
                // 'assets/slideshow/brose_hero.png',
                'assets/slideshow/tutu_hero.png',
                'assets/slideshow/urbantilt_hero.png',
                'assets/slideshow/bennett_hero.png'
            ];

            $(images).each(function() {
                $('<img />').attr('src', this);
            });
        }

        $(document).ready(function() {
            preloadImages();
        });
    </script>
</head>
<body>
</body>
</html>